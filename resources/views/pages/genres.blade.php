@extends('templates.main')
@section('container')
<h1 class="mb-4">Genres</h1>

    @foreach ($genres as $genre)
    <ul>
        <li>
        <h2><a href="/genres/{{ $genre->slug }}">{{ $genre->name }}</a></h2>
        </li>
    </ul>
    @endforeach
@endsection