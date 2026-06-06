@extends('admin.layouts.app')

@section('title', 'Contact Messages')
@section('page-title', 'Contact Messages')

@section('content')
<div class="card">
    <div class="card-header">All Messages</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr style="{{ !$contact->is_read ? 'font-weight:600;' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone ?? '-' }}</td>
                    <td>{{ $contact->subject ?? '-' }}</td>
                    <td>{{ $contact->created_at->format('d M Y') }}</td>
                    <td>
                        @if($contact->is_read)
                        <span class="badge badge-info">Read</span>
                        @else
                        <span class="badge badge-warning">Unread</span>
                        @endif
                    </td>
                    <td class="action-btns">
                        <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this message?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $contacts->links() }}
    </div>
</div>
@endsection
