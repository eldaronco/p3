<!doctype html>
<!--This is the master layout view.  The user and paras views are child view so this.  Using one stylesheet for all, plus
bootstrap, so that is listed here. Also common main title and footer.  -->

<html>
<head>
    <title>@yield('title', 'Developers Best Friend')</title>
    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
    <link href="/css/bootstrap.min.css" type='text/css' rel='stylesheet'>
</head>
<body>
  <h1 class='main_title'>Developer's Best Friend</h1>
  <div class="container">
    <header>
      @yield('header')
    </header>

    <section>
      @yield('content')
    </section>
  </div>
  <footer>
    &copy; {{ date('Y') }}
  </footer>

</body>
</html>
