@extends('admin.layouts.app')

@section('title', 'Manage Pages')
@section('page-title', 'Manage Pages')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Pages</span>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $page)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td><span class="badge badge-{{ $page->status ? 'success' : 'warning' }}">{{ $page->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" onsubmit="return confirm('Delete this page?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
