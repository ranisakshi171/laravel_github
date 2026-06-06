@extends('admin.layouts.app')

@section('title', 'About Us Management')
@section('page-title', 'About Us')

@section('content')
<div class="card">
    <div class="card-header">About Us Content</div>
    <div class="card-body">
        <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $about->title ?? '') }}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="8">{{ old('description', $about->description ?? '') }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mission</label>
                        <textarea name="mission" class="form-control" rows="4">{{ old('mission', $about->mission ?? '') }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Vision</label>
                        <textarea name="vision" class="form-control" rows="4">{{ old('vision', $about->vision ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        @if($about && $about->image)
                        <small>Current: <a href="{{ asset('storage/' . $about->image) }}" target="_blank">View</a></small>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Video URL (YouTube)</label>
                        <input type="url" name="video_url" class="form-control" value="{{ old('video_url', $about->video_url ?? '') }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection
