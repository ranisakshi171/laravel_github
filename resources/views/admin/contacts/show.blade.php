@extends('admin.layouts.app')

@section('title', 'View Message')
@section('page-title', 'View Message')

@section('content')
<div class="card">
    <div class="card-header">Message Details</div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr><th style="width:150px;">Name</th><td>{{ $contact->name }}</td></tr>
            <tr><th>Email</th><td>{{ $contact->email }}</td></tr>
            <tr><th>Phone</th><td>{{ $contact->phone ?? '-' }}</td></tr>
            <tr><th>Subject</th><td>{{ $contact->subject ?? '-' }}</td></tr>
            <tr><th>Date</th><td>{{ $contact->created_at->format('d M Y h:i A') }}</td></tr>
            <tr><th>Status</th><td>{!! $contact->is_read ? '<span class="badge badge-info">Read</span>' : '<span class="badge badge-warning">Unread</span>' !!}</td></tr>
            <tr><th>Message</th><td>{{ $contact->message }}</td></tr>
        </table>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back</a>
        @if(!$contact->is_read)
        <form action="{{ route('admin.contacts.mark-read', $contact) }}" method="POST" style="display:inline;">
            @csrf @method('PATCH')
            <button class="btn btn-primary">Mark as Read</button>
        </form>
        @endif
    </div>
</div>
@endsection
