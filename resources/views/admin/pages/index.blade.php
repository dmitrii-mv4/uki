@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><span>Страницы сайта</span></li>
            </ol>
        </div>
    </header>

    <div class="card-body info-module">
        <div>
            <strong class="text-color-dark">Всего страниц:</strong>
            <strong>{{ $pages->count() }}</strong>
        </div>

        <div>
            <a href="{{ route('admin.pages.create') }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary">Добавить страницу</a>
        </div>
    </div>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>

            <h2 class="card-title">Страницы</h2>
        </header>

        <div class="card-body">
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название страницы</th>
                        <th>Статус</th>
                        <th>Дата обновления</th>
                        <th>Дата создания</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td><a href="/{{ $page->url }}" target="_blank" title="Перейти на страницу">{{ $page->title }}</a></td>
                            <td>
                                @if ($page->is_published == 1)
                                    <span class="badge badge-success">Опубликована</span>
                                @else
                                    <span class="badge badge-warning">Не опубликована</span>
                                @endif
                            </td>
                            <td>{{ $page->updated_at }}</td>
                            <td>{{ $page->created_at }}</td>
                            <td class="options">
                                <a href="{{ route('admin.pages.edit', $page->id) }}" title="Редактировать" class="custom-edit btn btn-primary">Редактировать</a>
                               
                                <form action="{{ route('admin.pages.delete', $page->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <input type="submit" id="bDel" class="custom-delete btn btn-danger" value="Удалить" title="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pages->links('pagination::admin-bootstrap-5') }}
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection