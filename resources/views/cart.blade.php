@extends('layouts.app')

@section('content')
<section>
    <div class="container">
         <div class="row">
            @foreach ($products as $product_id => $product)

                @php
                    $qty = $product['qty'];
                    $product = $products[$product_id]['product'];
                 @endphp
                <div class="col-lg-3 col-sm-3 col-xs-12" style="height: 100px; line-height: 100px;">
                    <img  src="{{ asset('img/'.$product->img) }}" style="width: 80px; height: 80px;">
                </div>
                 <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix fs-3" style="height: 100px; line-height: 100px;">
                    {{ $product->name }}
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix fs-3" style="height: 100px; line-height: 100px;">
                    {{ $product->price }} ₽
                </div>
                <div class="col-lg-1 col-sm-2 col-xs-12 mob-fix fs-3" style="height: 100px; line-height: 100px;">
                    {{ $qty }}
                </div>
                 <div class="col-lg-3 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                    <form action="{{ route('deleteFromCart',$product->id)}}" method="post">
                        @csrf
                        <button class="btn btn-outline fs-3">Удалить</button>
                    </form>
                </div>

            @endforeach

        </div>
    </div>
</section>

@endsection
