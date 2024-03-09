@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><a href="{{ route('admin.articles.index') }}">Каталог статей</a></li>
                <li><a href="{{ route('admin.articles.categories.index') }}">Категории</a></li>
                <li><span>Редактирование категории</span></li>
            </ol>
        </div>
    </header>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>

            <h2 class="card-title">Редактирование категории</h2>
        </header>
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.articles.categories.update', $category->id) }}">
                @csrf
                @method('patch')
                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="title">Заголовк:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
                        @error('title')
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