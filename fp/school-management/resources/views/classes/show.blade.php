@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Class Details</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $class->id }}</li>
        <li class="list-group-item"><strong>Name:</strong> {{ $class->name }}</li>
        <li class="list-group-item"><strong>Capacity:</strong> {{ $class->capacity }}</li>
        <li class="list-group-item"><strong>Teacher:</strong> {{ $class->teacher->name }}</li>
    </ul>

    <a href="{{ route('classes.index') }}" class="btn btn-secondary mt-3">Back to Classes</a>
</div>
@endsection
