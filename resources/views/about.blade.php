@extends('layouts.app')

@section('title', 'About Elara Vance')

@section('content')
    <section class="container mx-auto px-4 py-8">
        @include('components.section-header', ['slot' => 'About Elara Vance'])
        <div class="flex flex-col md:flex-row gap-6">
            <img src="{{ asset($author['image']) }}" alt="{{ $author['name'] }}" class="w-full md:w-1/3 h-64 object-cover rounded">
            <div>
                <h3 class="text-2xl font-serif">{{ $author['name'] }}</h3>
                <p class="text-lg mt-2">{{ $author['bio'] }}</p>
            </div>
        </div>
    </section>
@endsection