@extends('layouts.app')

@section('content')
<section class="h-100" style="background-color: #ffffff;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
  
          <div  class="d-flex justify-content-between align-items-center mb-4">
          </div>
          @php
          $sum = 0;
          @endphp
            @forelse  ($products as $product_id => $product)
                @php
                    $qty = $product['qty'];
                    $product = $products[$product_id]['product'];
                    $amount = $product->price * $qty;

                    $sum = $sum+$amount;

                 @endphp
                 <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-4 col-lg-2 col-xl-2">
                  <img
                    src="{{asset('img/'.$product->img)}}"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2 fs-3"><b>{{$product->name}}</b></p>
                  <p><span class="text-muted">Год выпуска: </span>{{$product->year}}</p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 d-flex">
                    <form action="{{route('deleteFromCart',$product->id)}}" method="post">
                        @csrf
                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash text-dark" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg>
                  </button>
                    </form>
  
                  <input id="form1" min="0" name="quantity" value="{{$qty}}" type="number"
                    class="form-control form-control-sm" />
  
                <form action="{{route('addToCart',$product->id)}}" method="post">
                @csrf
                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus text-dark" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                  </button>
                </form>
                
                </div>
                <div class="col-md-4 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0">{{$amount}} ₽</h5>
                </div>
                <div class="col-md-4 col-lg-1 col-xl-1 text-end">
                <form action="{{route('deleteFromCart',$product->id)}}" method="post">
                              @csrf
                            <button class="btn text-danger" type="submit">Удалить</button>
                     </div>
                </form>
              </div>
            </div>
          </div>
          
          @empty
            <h2 class="text-dark text-center"> <b >Невозможно</b>  оформить товар! <br> Пожалуйста, добавьте товар в корзину.</h2>
            <div class="text-center">
              <strong class="text-muted">Перейти <a href="{{route('catalog')}}" class="text-decoration-none">в каталог</a></strong>
            </div>
            
            @endforelse 
            <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-warning btn-block btn-lg text-end">Оформить заказ</button>
              <strong class="px-3">Итого: {{$sum}} ₽</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection



