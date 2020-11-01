@extends('app')

@section('title', 'Hello City')

@section('content')
    <img src="/images/quebec-flag.png" alt="Quebec flag">
    <h1>Hello from Québec... </h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection
