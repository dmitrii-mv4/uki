@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><a href="{{ route('admin.feedback.index') }}">Заявки с сайта</a></li>
                <li><span>Редактирование заявки</span></li>
            </ol>
        </div>
    </header>

    <section class="card">

        <div class="col-xl-12">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.feedback.update', $feedback->id) }}">
                @csrf
                @method('patch')

                <div class="card card-modern">
                    <div class="feedback-views card-header">
                        <div>
                            <h2 class="card-title">Заявка с сайт [id: {{ $feedback->id }}]</h2>
                        </div>
                        <div>
                            <button type="submit" class="form-btn-add mb-1 mt-1 me-1 btn btn-success">Сохранить</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="feedback-edit-block-left">
                                <h3 class="text-color-dark font-weight-bold text-4 line-height-1 mt-0 mb-3">Информация о клиенте</h3>

                                <div class="feedback-edit-klient">
                                    <div class="feedback-edit-title">Имя: </div>
                                    <div>
                                        <input type="text" class="feedback-edit-input form-control" id="name" name="name" value="@empty($feedback->name) - @endempty{{ $feedback->name }}">
                                    </div>
                                </div>

                                <div class="feedback-edit-klient">
                                    <div class="feedback-edit-title">Фамилия: </div>
                                    <div>
                                        <input type="text" class="feedback-edit-input form-control" id="surname" name="surname" value="@empty($feedback->surname) - @endempty{{ $feedback->surname }}">
                                    </div>
                                </div>

                                <div class="feedback-edit-klient">
                                    <div class="feedback-edit-title">Телефон: </div>
                                    <div>
                                        <input type="text" class="feedback-edit-input form-control" id="phone" name="phone" value="@empty($feedback->phone) - @endempty{{ $feedback->phone }}">
                                    </div>
                                </div>

                                <div class="feedback-edit-klient">
                                    <div class="feedback-edit-title">Электронная почта: </div>
                                    <div>
                                        <input type="text" class="feedback-edit-input form-control" id="email" name="email" value="@empty($feedback->email) - @endempty{{ $feedback->email }}">
                                    </div>
                                </div>

                                <div class="feedback-edit-klient">
                                    <div class="feedback-edit-title">Дополнительная информация: </div>
                                    <div>
                                        <textarea type="text" class="feedback-edit-input-textarea feedback-edit-input form-control" id="content" name="content">@empty($feedback->content) - @endempty {{ $feedback->content }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="feedback-edit-info-blok-right">
                                <h3 class="text-color-dark font-weight-bold text-4 line-height-1 mt-0 mb-3">Информация о заявки</h3>

                                <div class="feedback-edit-info">
                                    <div class="feedback-edit-title-info">Статус:</div>
                                    
                                    <select class="form-control mb-3" name="status">
                                        @if ($feedback->status == 0)
                                            <option value="0">Новая</option>
                                            <option value="1">Обрабатывается</option>
                                            <option value="2">Обработана</option>
                                            <option value="3">Проблемная</option>
                                        @elseif ($feedback->status == 1)
                                            <option value="1">Обрабатывается</option>
                                            <option value="0">Новая</option>
                                            <option value="2">Обработана</option>
                                            <option value="3">Проблемная</option>
                                        @elseif ($feedback->status == 2)
                                            <option value="2">Обработана</option>
                                            <option value="0">Новая</option>
                                            <option value="1">Обрабатывается</option>
                                            <option value="3">Проблемная</option>
                                        @elseif ($feedback->status == 3)
                                            <option value="3">Проблемная</option>
                                            <option value="0">Новая</option>
                                            <option value="1">Обрабатывается</option>
                                            <option value="2">Обработана</option>
                                        @else
                                            Не найден статус.
                                        @endif

                                    </select>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>
       
    </section>
  
    <!-- end: page -->
</section>

@endsection