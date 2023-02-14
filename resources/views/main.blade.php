@extends('layouts.app')

@section('content')

    <section>
        <div class="position-relative overflow-hidden p-3 p-md-3 m-md-3 text-center bg-light fixed-top">
            <div class="col-md-5 my-5 p-lg-4 mx-auto">
                <h1 class="display-4 font-wight-normal">О компании</h1>
                <p class="lead font-wight-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repudiandae accusamus delectus? Quidem voluptatum sint, fugiat nulla deserunt corrupti natus ipsum vero dignissimos cupiditate eos consequuntur numquam rerum tempore at!</p>
                <p class="text-muted fs-4">Все голоыне уборы в одном магазине!</p> 
            </div>
            <div class="product-device-2 d-none d-md-block positio-relative overflow-hidden">
                <img src="{{asset('img/main1.png')}}" alt="Шапки"style="max-width:15%;border:radius 20px;"class="">
                <img src="{{asset('img/main3.png')}}" alt="Шапки"style="max-width:25%;border:radius 20px;"class="">
                <img src="{{asset('img/main2.png')}}" alt="Шапки"style="max-width:15%;border:radius 20px;"class="">
            </div>
        </div>
    </section>
@endsection


