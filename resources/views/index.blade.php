<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pickles Banking - @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            @include('partials.header')
            <main>@yield('content')</main>
        </div>
        @include('partials.footer')
    </div>
    
    <script src="/js/app.js"></script>
</body>

</html>