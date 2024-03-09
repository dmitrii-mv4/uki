@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><span>Новости сайта</span></li>
            </ol>
        </div>
    </header>

    <div class="card-body info-module">
        <div>
            <strong class="text-color-dark">Всего новостей:</strong>
            <strong>{{ $news->count() }}</strong>
        </div>

        <div>
            <a href="{{ route('admin.news.create') }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary">Добавить новость</a>
        </div>
    </div>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>

            <h2 class="card-title">Новости</h2>
        </header>

        <div class="card-body">
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Статус</th>
                        <th>Дата изменения</th>
                        <th>Дата создания</th>
                        <th>Опции</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $news_item)
                        <tr>
                            <td>{{ $news_item->id }}</td>
                            <td><a href="" target="_blank" title="Перейти к новости">{{ $news_item->title }}</a></td>
                            <td>
                                @if ($news_item->is_published == 1)
                                    <span class="badge badge-success">Опубликована</span>
                                @else
                                    <span class="badge badge-warning">Не опубликована</span>
                                @endif
                            </td>
                            <td>{{ $news_item->updated_at }}</td>
                            <td>{{ $news_item->created_at }}</td>
                            <td class="options">
                                <a href="{{ route('admin.news.edit', $news_item->id) }}" title="Редактировать" class="custom-edit btn btn-primary">Редактировать</a>
                               
                                <form action="{{ route('admin.news.delete', $news_item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <input type="submit" id="bDel" class="custom-delete btn btn-danger" value="Удалить" title="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $news->links('pagination::admin-bootstrap-5') }}
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection