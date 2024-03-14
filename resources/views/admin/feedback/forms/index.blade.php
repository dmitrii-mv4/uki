@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><span>Контактные формы</span></li>
            </ol>
        </div>
    </header>

    <div class="card-body info-module">
        <div>
            <strong class="text-color-dark">Всего контактных форм:</strong>
            <strong>{{ $feedback_forms->count() }}</strong>
        </div>

        <div>
            <a href="{{ route('admin.feedback.forms.create') }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary">Добавить форму</a>
        </div>
    </div>

    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Контактные формы</h2>
        </header>

        <div class="card-body">
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Опции</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedback_forms as $feedback_form)
                        <tr>
                            <td>{{ $feedback_form->id }}</td>
                            <td>{{ $feedback_form->title }}</td>
                            <td class="options">
                                <a href="{{ route('admin.feedback.forms.edit', $feedback_form->id) }}" title="Редактировать" class="custom-edit btn btn-primary">Редактировать</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $feedback_forms->links('pagination::admin-bootstrap-5') }}
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection