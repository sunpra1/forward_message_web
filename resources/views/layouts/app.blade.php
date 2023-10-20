<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online Shop</title>


    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">dev.sunpra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <span class="mr-auto"></span>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Privacy Policies
              </a>
              <div class="dropdown-menu py-0">
                <a class="dropdown-item" href="#">Forward Message</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

        <main class="container-fluid">
            @yield('content')
            @include('layouts.footer')
        </main>

    <!-- Scripts -->
    <script src="{{ asset('bootstrap/jquery.js') }}" defer></script>
    <script src="{{ asset('bootstrap/bootstrap.js') }}" defer></script>
</body>
</html>
