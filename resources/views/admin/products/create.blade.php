@extends('admin.layouts.app')

@section('title', 'Add Product')
@section('page-title', 'Add New Product')

@section('content')
<div class="card">
    <div class="card-header">Product Details</div>
    <div class="card-body">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category *</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Slug (leave empty for auto-generate)</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
            </div>
            <div class="form-group">
                <label>Short Description</label>
                <textarea name="short_description" class="form-control" rows="3">{{ old('short_description') }}</textarea>
            </div>
            <div class="form-group">
                <label>Full Description</label>
                <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label>Features (one per line)</label>
                <textarea name="features" class="form-control" rows="5" placeholder="20 Hp Power Hydraulic Motor&#10;24 Bricks / Per Stroke&#10;PLC Control System">{{ old('features') }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Video URL (YouTube)</label>
                        <input type="url" name="video_url" class="form-control" value="{{ old('video_url') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Sort Order</label>
                        <input type="number" name="sort_order" class="form-control" value="0">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><input type="checkbox" name="is_featured"> Featured Product</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><input type="checkbox" name="status" checked> Active</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
