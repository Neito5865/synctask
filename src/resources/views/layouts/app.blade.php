<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/commons.css') }}">
    @yield('css')
</head>
<body>
    @include('commons.header')
    <div class="container">
        @yield('content')
    </div>
    @include('commons.footer')
    <script src="https://kit.fontawesome.com/bbc02bbca9.js" crossorigin="anonymous"></script>
</body>
</html>
