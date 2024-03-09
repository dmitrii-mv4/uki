@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><a href="{{ route('admin.articles.index') }}">Каталог статей</a></li>
                <li><span>Управление категориями</span></li>
            </ol>
        </div>
    </header>

    <div class="card-body info-module">
        <div>
            <strong class="text-color-dark">Всего категорий:</strong>
            <strong>{{ $categories->count() }}</strong>
        </div>

        <div>
            <a href="{{ route('admin.articles.categories.create') }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary">Добавить категорию</a>
        </div>
    </div>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>

            <h2 class="card-title">Статьи</h2>
        </header>

        <div class="card-body">
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Категория</th>
                        <th>Дата изменения</th>
                        <th>Дата создания</th>
                        <th>Опции</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td class="options">
                                <a href="{{ route('admin.articles.categories.edit', $category->id) }}" title="Редактировать" class="custom-edit btn btn-primary">Редактировать</a>
                               
                                <form action="{{ route('admin.articles.categories.delete', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <input type="submit" id="bDel" class="custom-delete btn btn-danger" value="Удалить" title="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links('pagination::admin-bootstrap-5') }}
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection