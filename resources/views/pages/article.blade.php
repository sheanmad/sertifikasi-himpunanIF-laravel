@extends('templates.main')
@section('container')
    <article class="mb-4">
        <h2>{{ $content->title }}</h2>
        <p>in <a href="/genres/{{ $content->genre->slug }}">{{ $content->genre->name }}</a></p>
        {!! $content->body !!}
    </article>

    <a href="/articles">Back to articles</a>
@endsection