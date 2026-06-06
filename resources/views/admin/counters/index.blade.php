@extends('admin.layouts.app')

@section('title', 'Manage Counters')
@section('page-title', 'Manage Counters')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Counters</span>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New</button>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Label</th>
                    <th>Value</th>
                    <th>Max Value</th>
                    <th>Prefix</th>
                    <th>Suffix</th>
                    <th>Sort</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($counters as $counter)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $counter->label }}</td>
                    <td>{{ $counter->value }}</td>
                    <td>{{ $counter->max_value }}</td>
                    <td>{{ $counter->prefix ?? '-' }}</td>
                    <td>{{ $counter->suffix ?? '-' }}</td>
                    <td>{{ $counter->sort_order }}</td>
                    <td><span class="badge badge-{{ $counter->status ? 'success' : 'warning' }}">{{ $counter->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <button type="button" class="btn btn-sm btn-primary edit-btn" data-id="{{ $counter->id }}" data-label="{{ $counter->label }}" data-value="{{ $counter->value }}" data-max="{{ $counter->max_value }}" data-prefix="{{ $counter->prefix }}" data-suffix="{{ $counter->suffix }}" data-sort="{{ $counter->sort_order }}" data-status="{{ $counter->status }}"><i class="fa fa-edit"></i></button>
                        <form action="{{ route('admin.counters.destroy', $counter) }}" method="POST" onsubmit="return confirm('Delete?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.counters.store') }}" method="POST">
                @csrf
                <div class="modal-header"><h5>Add Counter</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Label *</label>
                        <input type="text" name="label" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Value *</label>
                                <input type="number" name="value" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Max Value *</label>
                                <input type="number" name="max_value" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prefix (e.g. +)</label>
                                <input type="text" name="prefix" class="form-control" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Suffix (e.g. +)</label>
                                <input type="text" name="suffix" class="form-control" maxlength="10">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sort Order</label>
                                <input type="number" name="sort_order" class="form-control" value="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><input type="checkbox" name="status" checked> Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm" method="POST">
                @csrf @method('PUT')
                <div class="modal-header"><h5>Edit Counter</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Label *</label>
                        <input type="text" name="label" id="edit_label" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Value *</label>
                                <input type="number" name="value" id="edit_value" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Max Value *</label>
                                <input type="number" name="max_value" id="edit_max" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prefix</label>
                                <input type="text" name="prefix" id="edit_prefix" class="form-control" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input type="text" name="suffix" id="edit_suffix" class="form-control" maxlength="10">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sort Order</label>
                                <input type="number" name="sort_order" id="edit_sort" class="form-control" value="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><input type="checkbox" name="status" id="edit_status" checked> Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.edit-btn').click(function() {
            var id = $(this).data('id');
            $('#edit_label').val($(this).data('label'));
            $('#edit_value').val($(this).data('value'));
            $('#edit_max').val($(this).data('max'));
            $('#edit_prefix').val($(this).data('prefix'));
            $('#edit_suffix').val($(this).data('suffix'));
            $('#edit_sort').val($(this).data('sort'));
            $('#edit_status').prop('checked', $(this).data('status') == 1);
            $('#editForm').attr('action', '{{ url("admin/counters") }}/' + id);
            $('#editModal').modal('show');
        });
    });
</script>
@endpush
