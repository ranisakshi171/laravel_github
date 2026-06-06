@extends('admin.layouts.app')

@section('title', 'Edit Product')
@section('page-title', 'Edit Product')

@section('content')
<div class="card">
    <div class="card-header">Product Details</div>
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category *</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" required value="{{ old('name', $product->name) }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $product->slug) }}">
            </div>
            <div class="form-group">
                <label>Short Description</label>
                <textarea name="short_description" class="form-control" rows="3">{{ old('short_description', $product->short_description) }}</textarea>
            </div>
            <div class="form-group">
                <label>Full Description</label>
                <textarea name="description" class="form-control" rows="5">{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="form-group">
                <label>Features (one per line)</label>
                <textarea name="features" class="form-control" rows="5">{{ old('features', $product->features) }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        @if($product->image)
                        <small>Current: <a href="{{ asset('storage/' . $product->image) }}" target="_blank">View</a></small>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="url" name="video_url" class="form-control" value="{{ old('video_url', $product->video_url) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Sort Order</label>
                        <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $product->sort_order) }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><input type="checkbox" name="is_featured" {{ $product->is_featured ? 'checked' : '' }}> Featured</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><input type="checkbox" name="status" {{ $product->status ? 'checked' : '' }}> Active</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
