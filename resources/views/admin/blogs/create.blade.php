@extends('admin.layouts.app')

@section('title', 'Add Blog')
@section('page-title', 'Add New Blog')

@section('content')
<div class="card">
    <div class="card-header">Blog Details</div>
    <div class="card-body">
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
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
                <label>Short Description</label>
                <textarea name="short_description" class="form-control" rows="3">{{ old('short_description') }}</textarea>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="10">{{ old('content') }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="{{ old('author', setting('company_name')) }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Published Date</label>
                        <input type="date" name="published_at" class="form-control" value="{{ old('published_at', date('Y-m-d')) }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="status" checked> Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
