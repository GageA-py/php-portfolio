<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Gage\'s Portfolio')

@section('content')
<div class="flex items-center justify-center mt-0 min-h-screen">
    
<div class="max-w-sm bg-white border border-white rounded-lg dark:bg-gray-800 dark:border-gray-800 mt-[-7%]">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset('images/computer.jpg') }}" alt="Default Image" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome To My Portfolio!</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            My name is Gage and I'm a freelance software developer from Ontario, Canada. I have
            experience with multiple programming languages and frameworks such as
            Python (Django, Flask, PyGame), PHP(Laravel), WordPress and Javascript. Click below to view a variety of
            projects I have put together as a solo developer!
        </p>
  
        <a href="/projects" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            View Projects
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        
    </div>
</div>


</div>
@endsection
