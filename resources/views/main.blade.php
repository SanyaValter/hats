@extends('layouts.app')

@section('content')

    <section>
        <div class="position-relative overflow-hidden p-3 p-md-3 m-md-3 text-center  fixed-top">
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

    <section>
        <div class="container">
            <div class="row g-5">
            <div class="col-md-8">
              <h3 class="pb-4 mb-4 fst-italic border-bottom ">
                Новости компании
              </h3>

              <article class="blog-post">
                <h2 class="blog-post-title">Название новости</h2>
                <p class="blog-post-meta">Июнь 1, 2023 by <a href="#" class="text-decoration-none">Подробнее</a></p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At culpa excepturi ea aspernatur accusantium itaque aperiam corporis eaque saepe quae est dignissimos, molestiae consectetur nemo cum dolor architecto, eveniet commodi?</p>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, laboriosam! Exercitationem expedita odio dolores et recusandae. Consectetur asperiores quisquam officiis? Saepe provident qui ducimus facere, totam nam ullam sunt eligendi?</p>
        </div>


    </section>
@endsection


