@extends('layouts.app')

@section('content')

<div class="TextosLegalesContenedor">
    <div class="TextosLegalesTarjeta">
        <h1>{{ __('Creditos.Cred_01') }}</h1>
        <h2>{{-- URL --}}</h2>
        
        <h3>{{ __('Creditos.Cred_02') }}</h3>
        <ul>
            <li></li>
        </ul>
        <br>

        <h3>{{ __('Creditos.Cred_03') }}</h3>
        <ul>
            <li>Uicons by <a href="https://www.flaticon.com/uicons">Flaticon</a></li>
        </ul>
    </div>
</div>
	
@endsection