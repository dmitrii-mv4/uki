@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><span>Каталог статей</span></li>
            </ol>
        </div>
    </header>

    <div class="card-body info-module">
        <div>
            <strong class="text-color-dark">Всего статей:</strong>
            <strong>{{ $articles->count() }}</strong>
        </div>

        <div>
            <a href="{{ route('admin.articles.create') }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary">Добавить статью</a>
        </div>
    </div>

    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Статьи</h2>
        </header>

        <div class="card-body">
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Превью</th>
                        <th>Заголовок</th>
                        <th>Категория</th>
                        <th>Статус</th>
                        <th>Дата изменения</th>
                        <th>Дата создания</th>
                        <th>Опции</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>
                                @if (empty($article->image))
                                    <img src="/assets/admin/porto/img/no_image.svg" class="img-preview-list"/>
                                @else
                                    <img src="{{ asset('content/articles/'.$article->image) }}" class="img-preview-list"/>
                                @endif
                            </td>
                            <td><a href="" target="_blank" title="Перейти на статью">{{ $article->title }}</a></td>
                            <td>{{ $article->category->title }}</td>
                            <td>
                                @if ($article->is_published == 1)
                                    <span class="badge badge-success">Опубликована</span>
                                @else
                                    <span class="badge badge-warning">Не опубликована</span>
                                @endif
                            </td>
                            <td>{{ $article->updated_at }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td class="options">
                                <a href="{{ route('admin.articles.edit', $article->id) }}" title="Редактировать" class="custom-edit btn btn-primary">Редактировать</a>
                               
                                <form action="{{ route('admin.articles.delete', $article->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <input type="submit" id="bDel" class="custom-delete btn btn-danger" value="Удалить" title="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $articles->links('pagination::admin-bootstrap-5') }}
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection