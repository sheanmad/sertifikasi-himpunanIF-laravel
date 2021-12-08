@extends('templates.main')
@section('container')
<h1 class="mb-4">Genre: {{ $genre }}</h1>

    @foreach ($articles as $article)
    <article>
        <h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
        <p>{{ $article->excerpt }}</p>
    </article>
    @endforeach
@endsection