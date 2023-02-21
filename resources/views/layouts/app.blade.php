<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-xl navbar-light bg-white shadow-sm">
            <div class="container">
                    <a class="navbar-brand waves-effect fs-3 h2" href="{{ url('/') }}">
                        <img src="{{asset('img/Logo.png')}}" alt="">
                    </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto me-4">

                    </ul>

                    <div>
                        <a class="text-decoration-none text-dark me-4 fs-5" href="{{ route('catalog') }}">Каталог</a>
                        <a class="text-decoration-none text-dark me-4 fs-5" href="{{ route('aboutUs') }}">О нас</a>
                        <a class="text-decoration-none text-dark me-4 fs-5" href="{{ route('Contacts') }}">Контакты</a>
                        <a class="text-decoration-none text-dark me-4 fs-5" href="{{ route('cartPage') }}">Корзина</a>
                    </div>

                    <form method="get" action="{{route('search')}}">
                    <ul class="navbar-nav ms-auto ">
                        <form method="get" action="{{route('search')}}">
                            <input type="search" placeholder="Поиск.." id="search" name="search" class="form-control ">
                            <button class="btn px-4" type="submit">Найти</button>
                        </form>


                        <div class="dropdown mt-2 me-3">
                            <a class="dropdown-toggle text-decoration-none text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Дополнительно
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Стандарты качества</a></li>
                              <li><a class="dropdown-item" href="#">Клиентам и партнерам</a></li>
                              <li><a class="dropdown-item" href="#">Написать нам</a></li>
                            </ul>
                        </div>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-dark col-12" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class=" btn btn-dark text-white col-12" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
