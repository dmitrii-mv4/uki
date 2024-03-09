@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><a href="{{ route('admin.users.index') }}">{{ $title_page }}</a></li>
                <li><span>Изменение пользователя</span></li>
            </ol>
        </div>
    </header>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>

            <h2 class="card-title">Изменение пользователя: {{ $user->name }} [id: {{ $user->id }} ]</h2>
        </header>
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.users.update', $user->id) }}">
                @csrf
                @method('patch')
                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="name">Имя:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        @error('name')
                            <span class="help-block form-input-error">Поле обязательное для заполнения.</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="name">Email:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        @error('email')
                            <span class="help-block form-input-error">Поле обязательное для заполнения.</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="role">Роль:</label>
                    <div class="col-lg-6">
                        <select class="form-control mb-3" name="role">
                            @if ($user->role == 'user')
                                <option value="user">Пользователь</option>
                                <option value="admin">Администратор</option>
                            @else
                                <option value="admin">Администратор</option>
                                <option value="user">Пользователь</option>
                            @endif
                        </select>
                    </div>
                </div>

                <button type="submit" class="form-btn-add mb-1 mt-1 me-1 btn btn-success">Изменить</button>
            </form>
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection