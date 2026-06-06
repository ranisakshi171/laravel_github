@extends('admin.layouts.app')

@section('title', 'Manage Sliders')
@section('page-title', 'Manage Sliders')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Sliders</span>
        <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Sort Order</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/' . $slider->image) }}" class="table-img" alt=""></td>
                    <td>{{ $slider->title ?? '-' }}</td>
                    <td>{{ $slider->sort_order }}</td>
                    <td><span class="badge badge-{{ $slider->status ? 'success' : 'warning' }}">{{ $slider->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST" onsubmit="return confirm('Delete this slider?')">
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
