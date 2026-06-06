@extends('admin.layouts.app')

@section('title', 'Manage Products')
@section('page-title', 'Manage Products')

@php
$productImages = [
    'automatic-fly-ash-bricks-making-machine-techno-24' => '1738769570img1.jpg',
    'automatic-fly-ash-brick-plant-techno-18' => '1738768524img1.jpg',
    'fly-ash-bricks-making-machine-techno-15' => '1738768134img1.jpg',
    'fly-ash-automatic-brick-making-machine-techno-12' => '1738767646img1.jpg',
    'fully-automatic-fly-ash-brick-machine-techno-10' => '1738767801img1.jpg',
    'fly-ash-brick-machine-techno-08' => '1738749724img1.jpg',
    'concrete-block-making-machine' => '1738771934img1.jpg',
    'vibro-forming-table' => '1738778399img1.jpg',
    'interlocking-brick-machine' => '1754292280img1.jpg',
    'pan-mixer-500' => '1738778670img1.jpg',
    'pan-mixer-750' => '1738778775img1.jpg',
    'pan-mixer-1000' => '1738778879img1.jpg',
];
@endphp

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Products</span>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Featured</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                @php
                    $img = $productImages[$product->slug] ?? null;
                    $imgUrl = $img ? asset('frontend/images/products/' . $img) : asset('frontend/images/logo.png');
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ $imgUrl }}" class="table-img" alt="" onerror="this.src='{{ asset('frontend/images/logo.png') }}'"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name ?? '-' }}</td>
                    <td>{!! $product->is_featured ? '<span class="badge badge-success">Yes</span>' : '<span class="badge badge-warning">No</span>' !!}</td>
                    <td><span class="badge badge-{{ $product->status ? 'success' : 'warning' }}">{{ $product->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-btns">
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
@endsection
