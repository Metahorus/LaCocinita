@extends('layouts.app')

@section('content')
<div class="ProdA" id="gofio">
    <h2>{{ __('Pella de gofio') }}</h2>
</div>

<div class="ProdB2" id="tarjetaGofio">
    <div class="ProdB3">
        <div class="ProdB4">
            <h4 id="tarjetaGofioTexto">{{ __('zumosyconcentrados.zum_01') }}</h4>
        </div>
        <img src="{{ asset('imagenes/productos/zumos/Zu.Tuno.SA.500ml.webp') }}" alt="{{ __('zumosyconcentrados.zum_01') }}">
        <div class="ProdB5">
            <h4 id="tarjetaGofioTexto">{{ __('zumosyconcentrados.zum_01') }}</h4>

            <h5>{{ __('productos.prod_01') }}:</h5>
            <p><i class="fi fi-tr-angle-small-right"></i> 500mL - 5€</p>
        </div>
    </div>

    <div class="ProdB6">
        <h5>{{ __('productos.prod_01') }}:</h5>
        <p><i class="fi fi-tr-angle-small-right"></i> 500mL - 5€</p>
    </div>

    <div class="ProdB7">
        {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
        <p>Lorem, ipsum dolor.</p> --}}

        <h5>{{ __('productos.prod_03') }}:</h5>
        <p>{{ __('zumosyconcentrados.zum_010') }}</p>
    </div>

    {{-- <div class="ProdB8">
        <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
        <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
    </div> --}}
</div>
@endsection