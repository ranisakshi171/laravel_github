@extends('admin.layouts.app')

@section('title', 'Site Settings')
@section('page-title', 'Site Settings')

@section('content')
<div class="card">
    <div class="card-header">General Settings</div>
    <div class="card-body">
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $settings['company_name'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Company Email</label>
                        <input type="email" name="company_email" class="form-control" value="{{ old('company_email', $settings['company_email'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone 1</label>
                        <input type="text" name="company_phone" class="form-control" value="{{ old('company_phone', $settings['company_phone'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone 2</label>
                        <input type="text" name="company_phone2" class="form-control" value="{{ old('company_phone2', $settings['company_phone2'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="company_address" class="form-control" value="{{ old('company_address', $settings['company_address'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="company_city" class="form-control" value="{{ old('company_city', $settings['company_city'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" name="company_state" class="form-control" value="{{ old('company_state', $settings['company_state'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Pincode</label>
                        <input type="text" name="company_pincode" class="form-control" value="{{ old('company_pincode', $settings['company_pincode'] ?? '') }}">
                    </div>
                </div>
            </div>

            <h5 class="mt-4 mb-3">Social Links</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Facebook URL</label>
                        <input type="url" name="facebook_url" class="form-control" value="{{ old('facebook_url', $settings['facebook_url'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Instagram URL</label>
                        <input type="url" name="instagram_url" class="form-control" value="{{ old('instagram_url', $settings['instagram_url'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>LinkedIn URL</label>
                        <input type="url" name="linkedin_url" class="form-control" value="{{ old('linkedin_url', $settings['linkedin_url'] ?? '') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>YouTube URL</label>
                        <input type="url" name="youtube_url" class="form-control" value="{{ old('youtube_url', $settings['youtube_url'] ?? '') }}">
                    </div>
                </div>
            </div>

            <h5 class="mt-4 mb-3">SEO Settings</h5>
            <div class="form-group">
                <label>Meta Title</label>
                <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $settings['meta_title'] ?? '') }}">
            </div>
            <div class="form-group">
                <label>Meta Description</label>
                <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $settings['meta_description'] ?? '') }}</textarea>
            </div>
            <div class="form-group">
                <label>Meta Keywords</label>
                <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $settings['meta_keywords'] ?? '') }}">
            </div>

            <h5 class="mt-4 mb-3">Google Map</h5>
            <div class="form-group">
                <label>Map Embed Code (iframe)</label>
                <textarea name="map_embed" class="form-control" rows="4">{{ old('map_embed', $settings['map_embed'] ?? '') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </div>
</div>
@endsection
