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

    <section class="card">

        <div class="col-xl-12">

            <div class="card card-modern">
                <div class="feedback-views card-header">
                    <div>
                        <h2 class="card-title">Заявка с сайт [id: {{ $feedback_item->id }}]</h2>
                    </div>
                    <div>
                        <a href="{{ route('admin.feedback.edit', $feedback_item->id) }}" title="Изменить" class="mb-1 mt-1 me-1 btn btn-primary">Изменить</a>
                        <form action="{{ route('admin.feedback.delete', $feedback_item->id) }}" method="post" class="feedback-views-delete">
                            @csrf
                            @method('delete')
                            <input type="submit" id="bDel" class="mb-1 mt-1 me-1 btn btn-danger" value="Удалить" title="Удалить" style="color: #fff">
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="feedback-views-block-left">
                            <h3 class="text-color-dark font-weight-bold text-4 line-height-1 mt-0 mb-3">Информация о клиенте</h3>
                            <table class="feedback-views-klient-tb-main">
                                <tr>
                                    <td>Имя:</td>
                                    <td>{{ $feedback_item->name }}</td>
                                </tr>
                                <tr>
                                    <td>Фамилия:</td>
                                    <td>{{ $feedback_item->surname }}</td>
                                </tr>
                                <tr>
                                    <td>Телефон:</td>
                                    <td><a href="tel:{{ $feedback_item->phone }}"> {{ $feedback_item->phone }}</a></td>
                                </tr>
                                <tr>
                                    <td>Электронная почта:</td>
                                    <td><a href="mailto:{{ $feedback_item->email }}"> {{ $feedback_item->email }}</a></td>
                                </tr>
                                <tr>
                                    <td>Дополнительная информация:</td>
                                    <td>{{ $feedback_item->content }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="feedback-views-info-blok-right">
                            <h3 class="text-color-dark font-weight-bold text-4 line-height-1 mt-0 mb-3">Информация о заявки</h3>
                            <table class="feedback-views-info-tb-main">
                                <tr>
                                    <td>Статус:</td>
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
                                </tr>
                                <tr>
                                    <td>Дата прихода:</td>
                                    <td>{{ $feedback_item->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Изменена:</td>
                                    <td>{{ $feedback_item->updated_at }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
       
    </section>
  
    <!-- end: page -->
</section>

@endsection