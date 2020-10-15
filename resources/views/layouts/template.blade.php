<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'Studentenadministratie')</title>
</head>
<body>
@include('shared.navigation')
<main class="container mt-3">
    @yield('main', "Under construction ...")
</main>
@include('shared.footer')

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
