@extends('admin.layouts.app')

@section('title', 'Manage Gallery')
@section('page-title', 'Manage Gallery')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Gallery Images</span>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Image</button>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Sort</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($galleries as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/' . $item->image) }}" class="table-img" style="width:60px;height:60px;object-fit:cover;"></td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category ?? '-' }}</td>
                    <td>{{ $item->sort_order }}</td>
                    <td><span class="badge badge-{{ $item->status ? 'success' : 'warning' }}">{{ $item->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <button type="button" class="btn btn-sm btn-primary edit-btn"
                            data-id="{{ $item->id }}"
                            data-title="{{ $item->title }}"
                            data-description="{{ $item->description }}"
                            data-category="{{ $item->category }}"
                            data-sort="{{ $item->sort_order }}"
                            data-status="{{ $item->status }}"><i class="fa fa-edit"></i></button>
                        <form action="{{ route('admin.galleries.destroy', $item) }}" method="POST" onsubmit="return confirm('Delete this image?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $galleries->links() }}
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header"><h5>Add Gallery Image</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Title *</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image * (max 5MB)</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" class="form-control" placeholder="e.g. Products, Infrastructure">
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
            <form id="editGalleryForm" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="modal-header"><h5>Edit Gallery Image</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Title *</label>
                        <input type="text" name="title" id="edit_title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="edit_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image (leave empty to keep current)</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" id="edit_category" class="form-control">
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
            $('#edit_title').val($(this).data('title'));
            $('#edit_description').val($(this).data('description'));
            $('#edit_category').val($(this).data('category'));
            $('#edit_sort').val($(this).data('sort'));
            $('#edit_status').prop('checked', $(this).data('status') == 1);
            $('#editGalleryForm').attr('action', '{{ url("admin/galleries") }}/' + id);
            $('#editModal').modal('show');
        });
    });
</script>
@endpush
