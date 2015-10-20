<!doctype html>
<html>
<head>
    <title>@yield('title', 'Developers Best Friend')</title>
    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
    <link href="/css/bootstrap.min.css" type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>

    <header>

    </header>

    <section>
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>


</body>
</html>
