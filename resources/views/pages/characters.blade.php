@extends('templates.main')
@section('container')
    <h3>{{ $name }}</h3>
    <img src="img/{{ $img }}" alt={{ $name }} width="400">
@endsection