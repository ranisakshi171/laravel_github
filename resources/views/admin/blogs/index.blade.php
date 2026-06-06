@extends('admin.layouts.app')

@section('title', 'Manage Blogs')
@section('page-title', 'Manage Blogs')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Blogs</span>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Published</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://via.placeholder.com/60' }}" class="table-img" alt=""></td>
                    <td>{{ Str::limit($blog->title, 40) }}</td>
                    <td>{{ $blog->author ?? '-' }}</td>
                    <td>{{ $blog->published_at ? $blog->published_at->format('d M Y') : '-' }}</td>
                    <td><span class="badge badge-{{ $blog->status ? 'success' : 'warning' }}">{{ $blog->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Delete this blog?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs->links() }}
    </div>
</div>
@endsection
