@extends('admin.layouts.app')

@section('title', 'Add Slider')
@section('page-title', 'Add New Slider')

@section('content')
<div class="card">
    <div class="card-header">Slider Details</div>
    <div class="card-body">
        <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label>Subtitle</label>
                <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}">
            </div>
            <div class="form-group">
                <label>Image *</label>
                <input type="file" name="image" class="form-control" required accept="image/*">
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="url" name="link" class="form-control" value="{{ old('link') }}">
            </div>
            <div class="form-group">
                <label>Sort Order</label>
                <input type="number" name="sort_order" class="form-control" value="0">
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="status" checked> Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
