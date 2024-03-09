<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
        <title>UKI</title>
    </head>
    <body>
        <div class="container">
            <div>
                <a href="{{ route('articles.index') }}">Blog</a> |
                <a href="{{ route('articles.create') }}">Create</a>
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>