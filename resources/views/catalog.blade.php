@extends('layouts.app')

@section('content')
    <div>
        <br>
        <a href="{{ request()->fullUrlWithQuery(['field' => 'year', 'order' => 'asc']) }}">Год по возрастанию</a>
        <a href="{{ request()->fullUrlWithQuery(['field' => 'year', 'order' => 'desc']) }}">Год по убыванию</a>
        <a href="{{ request()->fullUrlWithQuery(['field' => 'name', 'order' => 'asc']) }}">Название по возрастанию</a>
        <a href="{{ request()->fullUrlWithQuery(['field' => 'name', 'order' => 'desc']) }}">Название по убыванию</a>
        <a href="{{ request()->fullUrlWithQuery(['field' => 'price', 'order' => 'asc']) }}">Цена по возрастанию</a>
        <a href="{{ request()->fullUrlWithQuery(['field' => 'price', 'order' => 'desc']) }}">Цена по убыванию</a>

        <a href="{{ request()->fullUrlWithQuery(['field' => null, 'order' => null]) }}">Сбросить сортировку</a>
        <br>
        <a href="{{ request()->fullUrlWithQuery(['category' => 'phones']) }}">Телефоны</a>
        <a href="{{ request()->fullUrlWithQuery(['category' => 'consoles']) }}">Приставки</a>
        <a href="{{ request()->fullUrlWithQuery(['category' => 'accessories']) }}">Аксессуары</a>

        <a href="{{ request()->fullUrlWithQuery(['category' => null]) }}">Показать всё</a>
        <br>

        @forelse ($products as $p)
            <a href="{{ route('details', $p->id) }}">
                <div class="card">
                    <img style="width:70%; height:auto;" src="{{ $p->img }}" alt="">
                    <p>{{$p->name}}</p>
                    <p>Цена: {{$p->price}}</p>
                </div>
            </a>
            @empty
            <p>no items</p>
        @endforelse
        <button class="submit"><a href="{{ route('home') }}">Главная страница</a></button>
    </div>
@endsection
