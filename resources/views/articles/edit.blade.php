@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('articles.update', $article->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" value="{{ $article->title }}">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Контент</label>
            <textarea name="content" class="form-control" id="content" rows="3">{{ $article->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="category" class="form-label">Категория</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
</div>
@endsection