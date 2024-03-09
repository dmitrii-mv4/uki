@extends('layouts.main')
@section('content')
<div>
    @foreach($articles as $article)
        <div><a href="{{ route('articles.show', $article->id) }}">{{ $article->id }} {{ $article->title }}</a></div>
    @endforeach
</div>
@endsection