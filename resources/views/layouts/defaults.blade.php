<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('public/js/app.js')
    @stack('styles')
    <title>Meu Layout</title>
</head>
<body>
    {{--<h1>@yield('title', 'Meu título')</h1>--}}
    <div>
        @yield('content')
    </div>
    <script src={{asset("/js/app.js")}}></script>
    @stack('scripts')
</body>
</html>