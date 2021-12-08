@extends('templates.main')
@section('container')
<a href="/create" class="mb-4 btn btn-primary">Create New Article</a>
    @foreach ($contents as $article)
    <article class="mb-4 border-bottom pb-4">
        <h2>
            <a href="/articles/{{ $article->id }}" class="text-decoration-none">{{ $article->title }}</a>
        </h2>

        <a href="/articles/{{ $article->id }}/edit">
            <button class="badge bg-warning text-decoration-none border-0">Edit</button>
        </a>
        
        <a href="/articles/{{ $article->id }}/delete">
            <button class="badge bg-danger text-decoration-none border-0" onclick="return confirm ('Are You Sure?')">Delete</button>
        </a>
        
        <p>in <a href="/genres/{{ $article->genre->slug }}" class="text-decoration-none">{{ $article->genre->name }}</a></p>

        <p>{{ $article->excerpt }}</p>
        <a href="/articles/{{ $article->id }}" class="text-decoration-none">Read more...</a>
    </article>
    @endforeach
@endsection