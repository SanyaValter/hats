@extends('layouts.app')

@section('content')

    <div class="text-center">
        <a class="text-center text-dark text-decoration-none fs-2 aligh-items-center" href="{{ request()->fullUrlWithQuery(['category' => null]) }}">Показать всё</a>
    </div>
    <section>
        <div class="container d-flex p-5">
                <div class="card m-4" style="width: 18rem;">
                <img src="{{asset('img/hats1.png')}}" class="card-img-top" alt="hats">
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'hats']) }}">Шапки</a>
                </div>
            </div>

            <div class="card m-4" style="width: 18rem; ">
                <img src="{{asset('img/main3.png')}}" class="card-img-top" alt="caps" class="">
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'bandana']) }}">Банданы</a>
                </div>
            </div>

            <div class="card m-4" style="width: 18rem; ">
                <img src="{{asset('img/caps1.png')}}" class="card-img-top" alt="caps" class="">
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'caps']) }}">Кепки</a>
                </div>
            </div>

            <div class="card m-4" style="width: 18rem;">
                <img src="{{asset('img/accessories1.png')}}" class="card-img-top" alt="accessories" style="max-width:70%;">
                <div class="card-body text-center">
                    <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'various']) }}">Разное</a>
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
                <div class="text-center fs-2">Цена: {{$p->price}}</div>
            </div>
            <img src="{{asset('img/'.$p->img)}}" alt="" class="featurette-image mx-auto img-fluid" style="max-width: 15%;">
        </div>
    </div>
    <hr>
    {{-- <a href="{{ route('details', $p->id) }}">
        <div class="card">
            <img style="width:70%; height:auto;" src="{{ $p->img }}" alt="">
            <p>{{$p->name}}</p>
            <p>Цена: {{$p->price}}</p>
        </div>
    </a> --}}
    @empty
    <div class="text-center">
        <strong class="text-center fs-3">Выберите категорию</strong>
    </div>

@endforelse
@endsection
