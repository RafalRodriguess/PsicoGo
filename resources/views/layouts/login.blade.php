<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ... outros meta tags ... -->
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>

        @stack('scripts')

    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
