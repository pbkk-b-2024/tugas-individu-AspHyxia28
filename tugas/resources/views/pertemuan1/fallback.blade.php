@extends('layout.base')

@section('title', 'Fallback Route')

@section('content')
    <h1>Wasn't Supposed To Be Here</h1>
    <p>Back To Menu?</p>
    <a href="{{ url('/') }}">Home</a>
@endsection
