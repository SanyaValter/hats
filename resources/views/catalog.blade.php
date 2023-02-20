@extends('layouts.app')

@section('content')

    <div class="text-center py-3">
        <a class="text-center text-dark text-decoration-none fs-2 aligh-items-center btn" href="{{ request()->fullUrlWithQuery(['category' => null]) }}">Показать всё</a>
    </div>
    <section>
    <div class="container px-4" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

        <div class="col">
            <div class="card card-cover  overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
                <a href="{{ request()->fullUrlWithQuery(['category' => 'hats']) }}"><img style="max-width: 200px; max-height:  200px;" class="card-img-top" src="{{asset('img/hats1.png')}}" alt="Шапки"></a>
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class="display-6 lh-1 fw-bold text-dark text-center">  <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'hats']) }}">Шапки</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover  overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
                <a href="{{ request()->fullUrlWithQuery(['category' => 'bandana']) }}"><img style="max-width: 200px; max-height:  200px;" class="card-img-top" src="{{asset('img/main3.png')}}" alt="Банданы"></a>
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class="display-6 lh-1 fw-bold text-dark text-center">  <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'bandana']) }}">Банданы</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
               <a href="{{ request()->fullUrlWithQuery(['category' => 'caps']) }}"><img style="max-width: 200px; max-height:  200px;" class="card-img-top" src="{{asset('img/caps1.png')}}" alt="Кепки"></a>
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class=" display-6 lh-1 fw-bold text-dark text-center"> <a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'caps']) }}">Кепки</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover  overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
                <a href="{{ request()->fullUrlWithQuery(['category' => 'various']) }}"><img style="max-width: 200px; max-height:  200px;" class="card-img-top" src="{{asset('img/pngwing.com (10).png')}}" alt="Разное"></a>
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class=" display-6 lh-1 fw-bold text-dark text-center"><a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'various']) }}">Разное</a>
              </div>
            </div>
          </div>
          

          <div class="col">
            <div class="card card-cover overflow-hidden alight-items-center rounded-4 shadow-lg">
              <div class="d-flex justify-content-center w-100 align-items-center py-2">
                <a href="{{ request()->fullUrlWithQuery(['category' => 'scarf']) }}"><img style="max-width: 200px; max-height:  200px;" class="card-img-top" src="{{asset('img/scarf.png')}}" alt="Шарфы"></a>
                </div>
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h2 class="display-6 lh-1 fw-bold text-dark text-center"><a class="text-center text-dark text-decoration-none fs-2" href="{{ request()->fullUrlWithQuery(['category' => 'scarf']) }}">Шарфы</a>
              </div>
            </div>
          </div>
      </div>
      
          
            
    </section>



 <div class="container py-3">
    <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
    @forelse ($products as $p)
                  <div class="card shadow-0 border my-2 rounded-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                          <div class="bg-image hover-zoom ripple rounded ripple-surface">
                            <img style="max-width: 70%" src="{{asset('img/'.$p->img)}}"
                              class="w-100">
                            <a href="#!">
                              <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <strong class="fs-4">{{$p->name}}</strong>
                          <p class="text-muted mb-4 mb-md-0">
                           {{$p->text}}
                          </p>
                          <strong class="text-muted">Количество: {{$p->count}}</strong>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                          <div class="d-flex flex-row align-items-center mb-1">
                            <h4 class="mb-1 me-1" >{{$p->price}} ₽</h4>
                          </div>
                          <h6 class="text-success">Бесплатная доставка</h6>
                          <div class="d-flex flex-column mt-4">
                            <a href="{{route('details',$p->id)}}" class="text-center"><button class="btn outline  btn-sm fs-5" type="button">Подробнее</button></a>
                                <form action="{{ route('addToCart',$p->id) }}" method="post" class="text-center">
                                @csrf
                                <button class="btn btn-outline-dark btn-sm mt-2 text-center fs-5" type="submit">Добавить в корзину</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
              
    @empty
    <div class="text-center">
        <strong class="text-center fs-3">Товар скоро будет в наличии</strong>
        <p class="text-muted">Выберите другую категорию</p>
    </div>

@endforelse 
        </div>
    </div>
</div>
@endsection
