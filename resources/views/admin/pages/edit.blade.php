@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><a href="{{ route('admin.pages.index') }}">Страницы сайта</a></li>
                <li><span>Редактирование страницы</span></li>
            </ol>
        </div>
    </header>

    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Редактирование страницы: {{ $page->title }} [id: {{ $page->id }}] </h2>
        </header>
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.pages.update', $page->id) }}">
                @csrf
                @method('patch')
                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="title">Название страницы:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}">
                        @error('title')
                            <span class="help-block form-input-error">Поле обязательное для заполнения.</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2">Адрес страницы:</label>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-text">
                                @if (isset($_SERVER['HTTPS'])) https://@else http://@endif{{ $_SERVER['HTTP_HOST'] }}/
                            </span>
                            <input type="text" class="form-control" placeholder="contact" name="url" value="{{ $page->url }}">
                            @error('url')
                            <span class="help-block form-input-error">Поле обязательное для заполнения.</span>
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="is_published">Статус:</label>
                    <div class="col-lg-6">
                        <select class="form-control mb-3" name="is_published">
                            @if ($page->is_published == 1)
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
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="content">Контент страницы:</label>
                    <div id="editor" class="col-lg-6">
                        <textarea id="edit" name="content">{{ $page->content }}</textarea>
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