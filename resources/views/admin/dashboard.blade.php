@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="icon"><i class="fa fa-cogs"></i></div>
            <h3>{{ $totalProducts }}</h3>
            <p>Total Products</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="icon"><i class="fa fa-file-text"></i></div>
            <h3>{{ $totalBlogs }}</h3>
            <p>Total Blogs</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="icon"><i class="fa fa-image"></i></div>
            <h3>{{ $totalSliders }}</h3>
            <p>Total Sliders</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="icon"><i class="fa fa-envelope"></i></div>
            <h3>{{ $unreadMessages }}</h3>
            <p>Unread Messages</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">Recent Messages</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recentMessages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject ?? '-' }}</td>
                    <td>{{ $message->created_at->format('d M Y') }}</td>
                    <td><a href="{{ route('admin.contacts.show', $message) }}" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center">No messages yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
