@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
    <img src="{{ asset('images/image-about.jpg') }}" alt="App logo">
    <p>&copy; Built with &hearts; by <a href="https://unevireesudamericaine.wordpress.com/" target="_blank">Lilian Maurin</a>.</p>
    <p>
        <a href="{{ route('home') }}">Revenir à la page d'accueil</a>
    </p>
@endsection
