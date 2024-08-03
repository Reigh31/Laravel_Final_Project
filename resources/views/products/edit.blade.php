@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" class="bg-white p-6 border border-gray-300 rounded-lg shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Product Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="w-full border p-2 rounded @error('name') border-red-500 @enderror">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description:</label>
            <textarea name="description" id="description" class="w-full border p-2 rounded @error('description') border-red-500 @enderror">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700">Price:</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01" class="w-full border p-2 rounded @error('price') border-red-500 @enderror">
            @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="quantity" class="block text-gray-700">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}" class="w-full border p-2 rounded @error('quantity') border-red-500 @enderror">
            @error('quantity')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Product</button>
    </form>
@endsection
