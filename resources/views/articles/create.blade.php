@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Контент</label>
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="category" class="form-label">Категория</label>
            <select class="form-select" aria-label="category" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tag" class="form-label">Теги</label>
            <select class="form-select" multiple aria-label="multiple select example">
                <option value="1">One</option>
              </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Создать</button>
    </form>
</div>
@endsection