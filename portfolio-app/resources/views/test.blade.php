<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Gage\'s Portfolio')

@section('content')
    <div class="text-center py-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($projects as $project)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <h1 class="text-xl font-semibold p-4">{{ $project->title }}</h1>
                    <img class="w-full h-auto object-cover" src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                    <div class="p-4">
                        <p>{{ $project->description }}</p>
                        <a href="{{ $project->link }}" class="text-blue-500 hover:underline">View Project</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


