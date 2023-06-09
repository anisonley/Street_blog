@extends('layout')

@section('main')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white light:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 :text-gray-100">
                    {{ __("You're logged in!") }}
                    <hr>
                    <ul>
                        <li><a href="{{ route('blog.create') }}">Create a Post</a></li>
                        <li><a href="">Create category</a></li>
                        <li><a href="">Category List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    
@endsection