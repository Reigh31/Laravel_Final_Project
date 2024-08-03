@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
        <h2 class="text-xl font-semibold mb-4">Product Description:</h2>
        <p class="leading-relaxed whitespace-pre-wrap break-words mb-9">{{ $product->description }}</p> <!-- mb-9 adds a margin-bottom -->
        <div class="mt-4">
            <p class="text-lg"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p class="text-lg"><strong>Quantity:</strong> {{ $product->quantity }}</p>
        </div>
        <div class="mt-6">
            <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
            </form>
        </div>
    </div>
    <div class="mt-6">
        <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to Products</a>
    </div>
</div>
@endsection
