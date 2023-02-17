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
        <strong class="fs-3 text-center">
            Обратная связь
        </strong>
        <form class="form-inline">
            <label class="my-1 mr-2 fs-3" for="inlineFormCustomSelectPref">Причина обратной связи </label>
            <select class="custom-select my-1 mr-sm-2 fs-5" id="inlineFormCustomSelectPref">
              <option selected>Другое</option>
              <option value="1">Как заказать</option>
              <option value="2">Где вас найти</option>
              <option value="3">Работа</option>
            </select>

            <form class="form-inline">
                <label class="sr-only fs-4" for="inlineFormInputName2"></label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Ваше имя">

                <label class="sr-only fs-4" for="inlineFormInputGroupUsername2 ">Введите ваш Email</label>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="name@mail.ru">
                </div>

                <button type="submit" class="btn btn-outline-dark mb-2">Отправить</button>
              </form>

    </div>
</section>

@endsection
