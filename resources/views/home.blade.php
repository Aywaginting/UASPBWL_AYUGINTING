@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('HOME') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('SELAMAT DATANG DI SISTEM PENJUALAN UD DAULAY') }} 
                    
                    <div>
                        <hr>
                    <img src="resources/img/minyak.jpeg" width="210" height="150">
                    <img src="resources/img/garam.jpeg" width="210" height="150">
                    <img src="resources/img/gula.jpeg" width="210" height="150"> <hr>
                    <img src="resources/img/kopi.jpeg" width="210" height="150">
                    <img src="resources/img/susu.jpeg" width="210" height="150">
                    <img src="resources/img/teh.jpeg" width="210" height="150">
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
