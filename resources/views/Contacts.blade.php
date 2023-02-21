@extends('layouts.app')

@section('content')

<section>
    <div class="container">

    </div>
</section>
<section>
    <div class="position-relative overflow-hidden p-3 p-md-3 m-md-3 text-center  fixed-top">
        <div class="product-device-2 d-none d-md-block positio-relative overflow-hidden">
            <img src="{{asset('img/map.jpg')}}" alt="Карта"style="max-width:30%;border-radius: 20px"class="">
        </div>
    </div>
</section>
<section>
    <div class="container">
    <div id="msgSubmit" class=" text-center hidden h1">Обратная связь!</div>
        <div class="row">
            <div class="form-group col-sm-6 ">
                <label for="name" class="h4">Имя</label>
                <input type="text" class="form-control" id="name" placeholder="Введите ваше имя" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Введите ваш Email" required>
            </div>
        </div>
        <div class="form-group">
            <div class="text-center m-2 fs-3 h4">
                <label for="message" class="h3 text-center">Сообщение</label>
            </div>
            
            <textarea id="message" class="form-control" rows="4" placeholder="Напишите ваше сообщение" required></textarea>
        </div>
        <button type="submit" id="form-submit" class="btn btn-dark btn-lg pull-right m-1 ">Отправть</button>
    </div>

</section>

@endsection
