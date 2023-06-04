<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Uang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
        @if (Auth::check())
            @include('komponen/menu')
        @endif
        @include('komponen/pesan')
        @yield('konten')
        @include('komponen/footer')
</body>
</html>