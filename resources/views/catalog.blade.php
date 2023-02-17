@extends('layouts.app')

@section('content')

    <div class="text-center">
        <a class="text-center text-dark text-decoration-none fs-2 aligh-items-center btn" href="{{ request()->fullUrlWithQuery(['category' => null]) }}">Показать всё</a>
    </div>
    <section>
        <div class="container g-2 p-5 ">
            <div class="row">
                <div class="d-flex justify-content-between flex-wrap col-12 ">
                    <div class="card col-md-3" style="width: 18rem;">
                 <a href="{{ request()->fullUrlWithQuery(['category' => 'hats']) }}"><img src="{{asset('img/hats1.png')}}" class="card-img-top" alt="hats"></a>
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'hats']) }}">Шапки</a>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem; ">
                <a href="{{ request()->fullUrlWithQuery(['category' => 'bandana']) }}"><img src="{{asset('img/main3.png')}}" class="card-img-top" alt="bandana" class=""></a>
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'bandana']) }}">Банданы</a>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem; ">
                <a href="{{ request()->fullUrlWithQuery(['category' => 'caps']) }}"><img src="{{asset('img/caps1.png')}}" class="card-img-top" alt="caps" class=""></a>
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'caps']) }}">Кепки</a>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
                <a href="{{ request()->fullUrlWithQuery(['category' => 'various']) }}"><img src="{{asset('img/pngwing.com (10).png')}}" class="card-img-top" alt="accessories" ></a>
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'various']) }}">Разное</a>
                </div>
                </div>

            </div>
            </div>

     </div>
    </section>

    @forelse ($products as $p)
    <hr>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <a href="{{ route('details', $p->id) }}" class="text-decoration-none"><h2 class="featurette-hiddeng">{{$p->name}}</h2></a>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consequatur, tenetur iusto modi hic illo, earum neque provident quia quam dolore saepe reprehenderit velit recusandae laboriosam esse laudantium, maxime odio?</p>
                <div class="text-center fs-4">Цена: {{$p->price}}</div>
            </div>
            <img src="{{asset('img/'.$p->img)}}" alt="" class="featurette-image mx-auto img-fluid" style="max-width: 20%;">

           <form action="{{ route('addToCart',$p->id) }}" method="post">
            @csrf
            <button class="btn btn-outline-dark" type="submit">Добавить в корзину</button>
        </form>
        </div>
    </div>
    <hr>
    @empty
    <div class="text-center">
        <strong class="text-center fs-3">Товар скоро будет в наличии</strong>
    </div>

@endforelse
@endsection
