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


    <!-- end: page -->
</section>

@endsection