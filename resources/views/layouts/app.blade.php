<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Typeify') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom-style.css') }}" />

</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Typeify') }} </a>
    </div>

    <ul class="nav navbar-nav">

      <li class="active"><a href="/">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/about">
            Posts 
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="/posts">List</a></li>
          <li><a href="/posts/create">Create</a></li>
        </ul>
      </li>
      <li><a href="/about">About</a></li>

    </ul>

    <ul class="nav navbar-nav navbar-right">

      @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
                <span class="glyphicon glyphicon-log-in"></span>
                {{ __('Login') }}
            </a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <span class="glyphicon glyphicon-user"></span>
                    {{ __('Register') }}
                </a>
            </li>
        @endif
      @else
        <li class="nav-item dropdown">

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
      @endguest


    </ul>
  </div>
</nav>

    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>
