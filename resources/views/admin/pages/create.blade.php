@extends('admin.layouts.app')

@section('title', 'Add Page')
@section('page-title', 'Add New Page')

@section('content')
<div class="card">
    <div class="card-header">Page Details</div>
    <div class="card-body">
        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title *</label>
                <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label>Slug (leave empty for auto-generate)</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="15">{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="status" checked> Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
