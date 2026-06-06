@extends('admin.layouts.app')

@section('title', 'Edit Slider')
@section('page-title', 'Edit Slider')

@section('content')
<div class="card">
    <div class="card-header">Slider Details</div>
    <div class="card-body">
        <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $slider->title) }}">
            </div>
            <div class="form-group">
                <label>Subtitle</label>
                <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $slider->subtitle) }}">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($slider->image)
                <small>Current: <a href="{{ asset('storage/' . $slider->image) }}" target="_blank">View</a></small>
                @endif
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="url" name="link" class="form-control" value="{{ old('link', $slider->link) }}">
            </div>
            <div class="form-group">
                <label>Sort Order</label>
                <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $slider->sort_order) }}">
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="status" {{ $slider->status ? 'checked' : '' }}> Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
