@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li>
                    <a href="{{ route('admin.index') }}">
                        <i class="bx bx-home-alt"></i>
                    </a>
                </li>

                <li><span>{{ $title_page }}</span></li>

            </ol>
        </div>
    </header>

    <div class="row mb-3">
        <div class="col-xl-4">
            <section class="card card-featured-left card-featured-quaternary">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-quaternary">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">Пользователей онлайн</h4>
                                <div class="custom-info info">
                                    <strong class="amount">{{ $users_online->count() }}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-muted text-uppercase" href="{{ route('admin.users.index') }}">(Перейти в модуль)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-xl-4">
            <section class="card card-featured-left card-featured-primary mb-3">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-primary">
                                {{-- <i class="fas fa-life-ring"></i> --}}
                                <i class="icons icon-speech"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">Опубликованные новости</h4>
                                <div class="custom-info info">
                                    <strong class="amount">{{ $news->count() }}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-muted text-uppercase" href="{{ route('admin.news.index') }}">(Перейти в модуль)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-xl-4">
            <section class="card card-featured-left card-featured-primary mb-3">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-primary">
                                <i class="bx bx-detail"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">Опубликованные статьи</h4>
                                <div class="custom-info info">
                                    <strong class="amount">{{ $articles->count() }}</strong>
                                    {{-- <span class="text-primary">(14 unread)</span> --}}
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-muted text-uppercase" href="{{ route('admin.articles.index') }}">(Перейти в модуль)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row">
            <div class="col-md-6">
                <section class="card card-featured mb-4">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        </div>

                        <h2 class="card-title">Новые заявки ({{ $feedback_new_count }})</h2>
                    </header>
                    <div class="card-body">
                        @if ($feedback_new_count == 0)
                            Заявок пока нет.
                        @else
                            <table class="table table-responsive-md table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Имя \ Фамилия</th>
                                        <th>Пришло с формы</th>
                                        <th>Дата прихода</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($feedback_new as $feedback_items)
                                        <tr>
                                            <td>{{ $feedback_items->id }}</td>
                                            <td><a href="{{ route('admin.feedback.views', $feedback_items->id) }}"> {{ $feedback_items->name }} {{ $feedback_items->surname }}</a></td>
                                            <td>{{ $feedback_items->forms->title }}</td>
                                            <td>{{ $feedback_items->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif

                        <div class="feedback-footer-main"> 
                            @if ($feedback_new_count > 0)
                                <smail class="feedback-footer-main-smail">Последние 10 записей</smail>
                            @endif
                            <smail class="feedback-footer-main-smail"></smail>
                            <div class="feedback-footer">
                                <a class="text-muted text-uppercase" href="{{ route('admin.feedback.index') }}">(Перейти в модуль)</a>
                            </div>
                        </div>

                </section>
            </div>

        </div>
    </div>

    <!-- end: page -->
</section>

@endsection