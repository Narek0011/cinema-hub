<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Cinema Hub' }}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app" class="app-container">
    @include('partials.header')
    <main class="app-container">
        @yield('content')
    </main>

    @include('partials.footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
