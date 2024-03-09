@extends('layouts.admin')
@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Настройки системы</h2>

        <div class="right-wrapper text-end">
            <ol class="custom-breadcrumbs breadcrumbs">
                <li><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a></li>
                <li><span>Настройки системы</span></li>
            </ol>
        </div>
    </header>

    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
            </div>

            <h2 class="card-title">Общие настройки</h2>
        </header>
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.settings_save') }}">
                @csrf
                @method('patch')
                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="name">Название сайта:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $settings->name }}">
                        @error('name')
                            <span class="help-block form-input-error">Название сайта должно содержать от 3х символов.</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="description">Описание:</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="textareaDefault" name="description">{{ $settings->description }}</textarea>
                        @error('description')
                            <span class="help-block form-input-error">Поле обязательное для заполнения.</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="form-btn-add mb-1 mt-1 me-1 btn btn-success">Изменить</button>
            </form>
        </div>
    </section>
  
    <!-- end: page -->
</section>

@endsection