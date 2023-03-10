@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center alight-items-center">
            <h1 class="">{{ $product->name }}</h1>
        <img class="" src="{{asset('img/'.$product->img)}}" alt="" style="width: 200px; height: auto;">
        <p class="fs-3">Цена: {{ $product->price }}</p>
        <strong>Характеристики:  {{ $product->text }}</strong>
        <ul>
            <strong>Страна-производитель: {{ $product->country }}</strong>
            <br>
            <strong>Год выпуска: {{ $product->year }}</strong>
            <br>
            <strong>Модель: {{ $product->model }}</strong>
        </ul>
        <a href="{{route('main')}}" class="btn btn-outline-dark">Главная страница</a>
        <a href="{{route('catalog')}}" class="btn btn-outline-dark">Каталог</a>
        </div>
    </div>
@endsection
