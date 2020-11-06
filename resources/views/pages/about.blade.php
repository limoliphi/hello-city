@extends('layouts.app', ['pageTitle' => 'About Us'])

@section('content')
    <img src="{{ asset('images/image-about.jpg') }}" alt="App logo" class="my-12 rounded shadow-md h-40">
    <h2 class="mb-5 text-gray-700">
        &copy; Built with <span class="text-pink-500">&hearts;</span> by <a href="https://unevireesudamericaine.wordpress.com/" target="_blank">Lilian Maurin</a>.</h2>
    <p>
        <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
    </p>
@endsection
