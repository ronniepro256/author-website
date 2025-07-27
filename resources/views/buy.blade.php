@extends('layouts.app')

@section('title', $book['title'] . ' - Buy Now')

@section('content')
    <section class="container mx-auto px-4 py-8">
        @include('components.section-header', ['slot' => $book['title']])
        <div class="flex flex-col md:flex-row gap-6">
            <img src="{{ asset($book['image']) }}" alt="{{ $book['title'] }}" class="w-full md:w-1/3 h-64 object-cover rounded">
            <div>
                <p class="text-lg">{{ $book['description'] }}</p>
                <p class="text-xl font-semibold mt-2">${{ number_format($book['price'], 2) }}</p>
                <x-button x-data x-on:click="$refs.modal.showModal()">Buy Now</x-button>
            </div>
        </div>
    </section>
    <dialog x-ref="modal" class="backdrop:bg-primary/50 p-6 rounded-lg">
        <h3 class="text-2xl font-serif mb-4">Purchase {{ $book['title'] }}</h3>
        <p class="mb-4">Placeholder: Payment form to be implemented in Phase 2.</p>
        <x-button onclick="$refs.modal.close()">Close</x-button>
    </dialog>
@endsection