<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>License Management System</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/libs.css">
</head>
<body>
    @include('partials/nav')
    <div class="container">
        @yield('content')
    </div>

    <script src="/js/app.js"></script>
    <script src="/js/libs.js"></script>
    @include('partials/flash')

    @yield('scripts.footer')

</body>
</html>