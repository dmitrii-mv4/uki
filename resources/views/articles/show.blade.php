@extends('layouts.main')
@section('content')
<div>
    <div>{{ $article->id }} {{ $article->title }}</div>
    <div>{{ $article->content }}</div>
    <div>
        <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('articles.delete', $article->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>
    <div>
        <a href="{{ route('articles.index') }}">Back</a>
    </div>
</div>
@endsection