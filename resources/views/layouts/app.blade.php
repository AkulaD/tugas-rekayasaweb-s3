<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A-1 Picture</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials.header')

    <div class="container flex-grow-1" style="padding-top:86px;">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>