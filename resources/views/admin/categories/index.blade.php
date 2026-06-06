@extends('admin.layouts.app')

@section('title', 'Manage Categories')
@section('page-title', 'Manage Categories')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Categories</span>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Products</th>
                    <th>Sort Order</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->products->count() }}</td>
                    <td>{{ $category->sort_order }}</td>
                    <td><span class="badge badge-{{ $category->status ? 'success' : 'warning' }}">{{ $category->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Delete this category?')">
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
