@extends('layouts.app')

@section('content')
    <div class="">
        <h1>{{ $product->name }}</h1>
        <img src="{{asset('img/'.$product->img)}}" alt="" style="width: 100px; height: auto;">
        <p>Цена: {{ $product->price }}</p>
        <p>Характеристики: </p>
        <ul>
            <li>Страна-производитель: {{ $product->country }}</li>
            <li>Год выпуска: {{ $product->year }}</li>
            <li>Модель: {{ $product->model }}</li>
        </ul>
    </div>
    <a href="{{route('main')}}" class="btn btn-outline-dark">Главная страница</a>
    <a href="{{route('catalog')}}" class="btn btn-outline-dark">Каталог</a>
@endsection
