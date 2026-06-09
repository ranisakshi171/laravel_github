@extends('admin.layouts.app')

@section('title', 'Manage FAQs')
@section('page-title', 'Manage FAQs')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>FAQs</span>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add FAQ</button>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Sort</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faqs as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($item->question, 60) }}</td>
                    <td>{{ Str::limit(strip_tags($item->answer), 80) }}</td>
                    <td>{{ $item->sort_order }}</td>
                    <td><span class="badge badge-{{ $item->status ? 'success' : 'warning' }}">{{ $item->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <button type="button" class="btn btn-sm btn-primary edit-btn"
                            data-id="{{ $item->id }}"
                            data-question="{{ $item->question }}"
                            data-answer="{{ $item->answer }}"
                            data-sort="{{ $item->sort_order }}"
                            data-status="{{ $item->status }}"><i class="fa fa-edit"></i></button>
                        <form action="{{ route('admin.faqs.destroy', $item) }}" method="POST" onsubmit="return confirm('Delete this FAQ?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $faqs->links() }}
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.faqs.store') }}" method="POST">
                @csrf
                <div class="modal-header"><h5>Add FAQ</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Question *</label>
                        <input type="text" name="question" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Answer *</label>
                        <textarea name="answer" class="form-control" rows="5" required></textarea>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editFaqForm" method="POST">
                @csrf @method('PUT')
                <div class="modal-header"><h5>Edit FAQ</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Question *</label>
                        <input type="text" name="question" id="edit_question" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Answer *</label>
                        <textarea name="answer" id="edit_answer" class="form-control" rows="5" required></textarea>
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
            $('#edit_question').val($(this).data('question'));
            $('#edit_answer').val($(this).data('answer'));
            $('#edit_sort').val($(this).data('sort'));
            $('#edit_status').prop('checked', $(this).data('status') == 1);
            $('#editFaqForm').attr('action', '{{ url("admin/faqs") }}/' + id);
            $('#editModal').modal('show');
        });
    });
</script>
@endpush
