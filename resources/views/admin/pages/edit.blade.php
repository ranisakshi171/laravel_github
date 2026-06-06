@extends('admin.layouts.app')

@section('title', 'Edit Page')
@section('page-title', 'Edit Page')

@section('content')
<div class="card">
    <div class="card-header">Page Details</div>
    <div class="card-body">
        <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Title *</label>
                <input type="text" name="title" class="form-control" required value="{{ old('title', $page->title) }}">
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $page->slug) }}">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="15">{{ old('content', $page->content) }}</textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($page->image)
                <small>Current: <a href="{{ asset('storage/' . $page->image) }}" target="_blank">View</a></small>
                @endif
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="status" {{ $page->status ? 'checked' : '' }}> Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
