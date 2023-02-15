@extends('layouts.app')

@section('content')

<section>
    <div class=" flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Мы находимся</h2>
            <p class="lead text-muted">Можете оставить заявку для полного уточнения места положения</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;"> <img class="m-5" src="{{asset('img/map.png')}}" alt="" style="max-width: 20%"></div>
        </div>
        <hr>

</section>

<section>
    <div class="container">
        <strong class="fs-3 text-center">
            Обратная связь
        </strong>
        <form class="form-inline">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Причина обратной связи </label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="name@mail.ru">
                </div>

                <button type="submit" class="btn btn-outline-dark mb-2">Отправить</button>
              </form>

    </div>
</section>

@endsection
