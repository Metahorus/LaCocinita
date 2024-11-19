@extends('layouts.app')

@section('content')

<div class="TextosLegalesContenedor">
    <div class="TextosLegalesTarjeta">
        <h1>{{ __('Cookies.Coo_01') }}</h1>
        <h2>{{-- NOMBRE DE LA WEB --}}</h2>
        
        <p>{{ __('Cookies.Coo_02') }}
            <br><br>
            {{ __('Cookies.Coo_03') }}
            
            <br><br>
            {{ __('Cookies.Coo_04') }}
            
            <br><br>
            {{ __('Cookies.Coo_05') }}
            
        </p>
        <br>

        <h3>{{ __('Cookies.Coo_06') }}</h3>
        <p>{{ __('Cookies.Coo_07') }}
        </p>
        <br>
        
        <h3>{{ __('Cookies.Coo_13') }}</h3>
        <p>{{ __('Cookies.Coo_14') }}
            
        </p>
    </div>
</div>
@endsection