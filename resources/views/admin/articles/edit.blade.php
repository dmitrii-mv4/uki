@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><a href="{{ route('admin.articles.index') }}">Каталог статей</a></li>
                <li><span>Редактирование статьи</span></li>
            </ol>
        </div>
    </header>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>

            <h2 class="card-title">Редактирование статьи</h2>
        </header>
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.articles.update', $article->id) }}">
                @csrf
                @method('patch')
                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="title">Заголовк:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
                        @error('title')
                            <span class="help-block form-input-error">Поле обязательное для заполнения.</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="category_id">Категория:</label>
                    <div class="col-lg-6">
                        <select class="form-control mb-3" name="category_id">
                            @foreach ($categories as $category)
                                <option {{ $category->id === $article->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="is_published">Статус:</label>
                    <div class="col-lg-6">
                        <select class="form-control mb-3" name="is_published">
                            @if ($article->is_published == 1)
                                <option value="1">Опубликовать</option>
                                <option value="0">Не опубликовывать</option>
                            @else
                                <option value="0">Не опубликовывать</option>
                                <option value="1">Опубликовать</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="content">Описание статьи:</label>
                    <div id="editor" class="col-lg-6">
                        <textarea id="edit" name="content">{{ $article->content }}</textarea>
                        @error('content')
                            <span class="help-block form-input-error">Поле обязательное для заполнения.</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="form-btn-add mb-1 mt-1 me-1 btn btn-success">Изменить</button>
            </form>
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection