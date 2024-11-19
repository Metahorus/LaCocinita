@extends('layouts.app')

@section('content')

<div class="TextosLegalesContenedor">
    <div class="TextosLegalesTarjeta">
        <h1>{{ __('cookies.Coo_01') }}</h1>
        <h2>La Cocinita</h2>
        
        <p>{{ __('cookies.Coo_02') }}
            <br><br>
            {{ __('cookies.Coo_03') }}
            
            <br><br>
            {{ __('cookies.Coo_04') }}
            
            <br><br>
            {{ __('cookies.Coo_05') }}
            
        </p>
        <br>

        <h3>{{ __('cookies.Coo_06') }}</h3>
        <p>{{ __('cookies.Coo_07') }}
        </p>
        <br>
        
        <h3>{{ __('cookies.Coo_13') }}</h3>
        <p>{{ __('cookies.Coo_14') }}
            
        </p>
    </div>
</div>
@endsection