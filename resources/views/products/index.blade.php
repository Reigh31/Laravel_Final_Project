@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Products</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New Product</a>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Price</th>
                <th class="py-2 px-4 border-b">Quantity</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->description }}</td>
                    <td class="py-2 px-4 border-b">${{ $product->price }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->quantity }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('products.edit', $product) }}" class="text-blue-500 hover:underline">Edit</a>
                        <!-- Add more action links (e.g., delete) if needed -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
