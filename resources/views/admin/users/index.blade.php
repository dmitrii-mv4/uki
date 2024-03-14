@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>{{ $title_page }}</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><span>{{ $title_page }}</span></li>
            </ol>
        </div>
    </header>

    <div class="card-body info-module">
        <div>
            <div>
                <strong class="text-color-dark">Всего пользователей:</strong>
                <strong>{{ $users->count() }}</strong>
            </div>
            <div>
                <strong class="text-color-dark">Сейчас онлайн:</strong>
                <strong>{{ $users_online->count() }}</strong>
            </div> 
        </div>

        <div>
            <a href="{{ route('admin.users.create') }}" type="button" class="mb-1 mt-1 me-1 btn btn-primary">Добавить пользователя</a>
        </div>
    </div>

    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Список пользователей</h2>
        </header>

        <div class="card-body">
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Роль</th>
                        <th>Дата обновления</th>
                        <th>Дата создания</th>
                        <th>Опции</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><a href="{{ route('admin.users.edit', $user->id) }}" title="Перейти в профиль">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td class="options">
                                <a href="{{ route('admin.users.edit', $user->id) }}" title="Редактировать" class="custom-edit btn btn-primary">Редактировать</a>
                               
                                @if ($user->id != 1)
                                    <form action="{{ route('admin.users.delete', $user->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                            <input type="submit" id="bDel" class="custom-delete btn btn-danger" value="Удалить" title="Удалить">
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links('pagination::admin-bootstrap-5') }}
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection