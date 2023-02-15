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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand fs-3" href="{{ url('/') }}">
                            {{ __('Шапки') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <ul class="navbar">
                        <li class="navbar">
                            <a class="text-dark text-decoration-none fs-5 px-3 " href="{{route('catalog')}}">Продукция и услуги</a>
                        </li>
                        <li class="nav-item dropdown navbar px-3">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Контакты</a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="}">Написать нам</a>
                                <a class="dropdown-item" href="}">Контакты</a>
                        </li>
                        <li class="nav-item dropdown navbar px-3">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Клиентам и партнерам</a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="}">Работа в компании</a>
                                <a class="dropdown-item" href="}">Стандарты качества</a>
                                <a class="dropdown-item" href="}">Клиентам и партнерам</a>
                        </li>
                    </ul>
{{--
                    <ul class="navbar-nav">
                        <li class="nav-item">
                                    <a class="btn fs-5" href="{{route('catalog')}}">{{ __('Каталог') }}</a>
                         </li>
                         <li class="nav-item">
                                    <a class="btn fs-5" href="">{{ __('Контакты') }}</a>
                         </li>
                         <li class="nav-item">
                                    <a class="btn fs-5" href="">{{ __('Написать нам') }}</a>
                         </li>

                         <li class="nav-item">
                                    <a class="btn fs-5" href="">{{ __('Работа в компании') }}</a>
                         </li>
                    </ul> --}}
                        {{-- <ul>
                            <li class="navbar">
                                <div class="input-group rounded">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <span class="input-group-text border-0" id="search-addon">
                                      Поиск
                                    </span>
                                  </div>
                            </li>
                        </ul> --}}
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn fs-4" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn fs-4" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
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

        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
