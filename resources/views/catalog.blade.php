@extends('layouts.app')

@section('content')
    
    <section>
        <div class="container d-flex p-5">
                <div class="card m-4" style="width: 18rem;">
                <img src="{{asset('img/main1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                <a href="" class="card-title fs-2 text-decoration-none text-dark">Шапки</a>
                </div>
            </div>

            <div class="card m-4" style="width: 18rem; ">
                <img src="{{asset('img/main1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                <a href="" class="card-title fs-2 text-decoration-none text-dark">Кепки</a>
                </div>
            </div>

            <div class="card m-4" style="width: 18rem;">
                <img src="{{asset('img/main1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                <a href="" class="card-title fs-2 text-decoration-none text-dark">Банданы</a>
                </div>
            </div>      
     </div>
        
    </section>
@endsection
