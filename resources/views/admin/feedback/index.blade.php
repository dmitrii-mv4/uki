@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><span>Заявки с сайта</span></li>
            </ol>
        </div>
    </header>

    <div class="card-body info-module">
        <div>
            <strong class="text-color-dark">Всего записей:</strong>
            <strong>{{ $feedback->count() }}</strong>
        </div>

        {{-- <div>
            <a href="{{ route('admin.feedback.create') }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary">Добавить форму</a>
        </div> --}}
    </div>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>
            <h2 class="card-title">Заявки с сайта</h2>
        </header>

        <div class="card-body">
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя \ Фамилия</th>
                        <th>Телефон</th>
                        <th>Почта</th>
                        <th>Статус</th>
                        <th>Пришло с формы</th>
                        <th>Дата прихода</th>
                        <th>Дата изменения</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedback as $feedback_item)
                        <tr>
                            <td>{{ $feedback_item->id }}</td>
                            <td><a href="{{ route('admin.feedback.views', $feedback_item->id) }}" title="Перейти к контакту">{{ $feedback_item->name }} {{ $feedback_item->surname }}</a></td>
                            <td>{{ $feedback_item->phone }}</td>
                            <td>{{ $feedback_item->email }}</td>
                            <td>
                                @if ($feedback_item->status == 0)
                                    <span class="badge badge-success" style="background: #8c8c8c;">Новая</span>
                                @elseif ($feedback_item->status == 1)
                                    <span class="badge badge-warning">Обрабатывается</span>
                                @elseif ($feedback_item->status == 2)
                                    <span class="badge badge-success">Обработана</span>
                                @elseif ($feedback_item->status == 3)
                                    <span class="badge badge-danger">Проблемная</span>
                                @else
                                    Не найден статус.
                                @endif
                            </td>
                            <td>{{ $feedback_item->forms->title }}</td>
                            <td>{{ $feedback_item->created_at }}</td>
                            <td>{{ $feedback_item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $feedback->links('pagination::admin-bootstrap-5') }}
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection