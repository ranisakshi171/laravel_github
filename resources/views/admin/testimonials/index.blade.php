@extends('admin.layouts.app')

@section('title', 'Manage Testimonials')
@section('page-title', 'Manage Testimonials')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Testimonials</span>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New</button>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->designation ?? '-' }}</td>
                    <td>
                        @for($i = 0; $i < $testimonial->rating; $i++)
                        <i class="fa fa-star" style="color:#4da8da;"></i>
                        @endfor
                    </td>
                    <td><span class="badge badge-{{ $testimonial->status ? 'success' : 'warning' }}">{{ $testimonial->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <button type="button" class="btn btn-sm btn-primary edit-btn"
                            data-id="{{ $testimonial->id }}"
                            data-name="{{ $testimonial->name }}"
                            data-designation="{{ $testimonial->designation }}"
                            data-company="{{ $testimonial->company }}"
                            data-content="{{ $testimonial->content }}"
                            data-rating="{{ $testimonial->rating }}"
                            data-sort="{{ $testimonial->sort_order }}"
                            data-status="{{ $testimonial->status }}"><i class="fa fa-edit"></i></button>
                        <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Delete?')">
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
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header"><h5>Add Testimonial</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content *</label>
                        <textarea name="content" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Rating</label>
                                <select name="rating" class="form-control">
                                    @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sort Order</label>
                                <input type="number" name="sort_order" class="form-control" value="0">
                            </div>
                        </div>
                        <div class="col-md-4">
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
            <form id="editTestimonialForm" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="modal-header"><h5>Edit Testimonial</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" id="edit_name" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" id="edit_designation" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" id="edit_company" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content *</label>
                        <textarea name="content" id="edit_content" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Rating</label>
                                <select name="rating" id="edit_rating" class="form-control">
                                    @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sort Order</label>
                                <input type="number" name="sort_order" id="edit_sort" class="form-control" value="0">
                            </div>
                        </div>
                        <div class="col-md-4">
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
            $('#edit_name').val($(this).data('name'));
            $('#edit_designation').val($(this).data('designation'));
            $('#edit_company').val($(this).data('company'));
            $('#edit_content').val($(this).data('content'));
            $('#edit_rating').val($(this).data('rating'));
            $('#edit_sort').val($(this).data('sort'));
            $('#edit_status').prop('checked', $(this).data('status') == 1);
            $('#editTestimonialForm').attr('action', '{{ url("admin/testimonials") }}/' + id);
            $('#editModal').modal('show');
        });
    });
</script>
@endpush
