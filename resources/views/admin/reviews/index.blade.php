@extends('admin.layouts.app')

@section('title', 'Manage Reviews')
@section('page-title', 'Manage Reviews')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Reviews</span>
        <span class="text-light">
            <span class="badge badge-success">{{ $reviews->where('status', true)->count() }} Approved</span>
            <span class="badge badge-warning">{{ $reviews->where('status', false)->count() }} Pending</span>
        </span>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reviews as $review)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $review->product->name ?? '-' }}</td>
                    <td>{{ $review->name }}</td>
                    <td>
                        @for($i = 0; $i < $review->rating; $i++)
                        <i class="fa fa-star" style="color:#ffbe00;"></i>
                        @endfor
                    </td>
                    <td>{{ Str::limit($review->comment, 60) }}</td>
                    <td>
                        <span class="badge badge-{{ $review->status ? 'success' : 'warning' }}">
                            {{ $review->status ? 'Approved' : 'Pending' }}
                        </span>
                    </td>
                    <td>{{ $review->created_at->format('d M Y') }}</td>
                    <td class="action-btns">
                        @if(!$review->status)
                        <form action="{{ route('admin.reviews.approve', $review) }}" method="POST" style="display:inline;">
                            @csrf @method('PATCH')
                            <button class="btn btn-sm btn-success" title="Approve"><i class="fa fa-check"></i></button>
                        </form>
                        @endif
                        <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" onsubmit="return confirm('Delete this review?')" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" class="text-center">No reviews yet.</td></tr>
                @endforelse
            </tbody>
        </table>
        {{ $reviews->links() }}
    </div>
</div>
@endsection
