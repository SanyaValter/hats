@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-4 ">{{ __('Добро пожаловать') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы успешно вошли в аккаунт!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
