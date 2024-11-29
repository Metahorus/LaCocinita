@extends('layouts.app')

@section('content')
<div class="ProdA" id="gofio">
    <h2>{{ __('Pella de gofio') }}</h2>
</div>

<div class="GofioA">

    <div class="GofioB">
        <h3>{{ __('gofio.gofio_04') }}</h3>
        <h4>{{ __('gofio.gofio_05') }}</h4>

        <p>{!! __('gofio.gofio_06') !!}</p>
        <p>{!! __('gofio.gofio_07') !!}</p>
        <p>{{ __('gofio.gofio_08') }}</p>

        <h5>{{ __('gofio.gofio_09') }}</h5>
    </div>

    <div class="ProdB1">
        <div class="ProdB2 GofioC" id="tarjetaGofio">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_01') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/gofio.webp') }}" alt="{{ __('gofio.gofio_01') }}" class="rounded-2xl">
                <div class="ProdB5">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_01') }}</h4>
    
                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 500gr - 7€</p>
                </div>
            </div>
    
            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 500gr - 7€</p>
            </div>
    
            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('gofio.gofio_02') }}</p>
    
                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('gofio.gofio_03') }}</p>
            </div>
    
            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2 GofioC" id="tarjetaGofio">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_12') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/gofio.webp') }}" alt="{{ __('gofio.gofio_12') }}" class="rounded-2xl">
                <div class="ProdB5">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_12') }}</h4>
    
                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
                </div>
            </div>
    
            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
            </div>
    
            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('gofio.gofio_120') }}</p>
    
                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('gofio.gofio_121') }}</p>
            </div>
    
            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2 GofioC" id="tarjetaGofio">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_10') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/Gofio.Pasas.webp') }}" alt="{{ __('gofio.gofio_10') }}" class="rounded-2xl">
                <div class="ProdB5">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_10') }}</h4>
    
                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
                </div>
            </div>
    
            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
            </div>
    
            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('gofio.gofio_101') }}</p>
    
                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('gofio.gofio_100') }}</p>
            </div>
    
            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2 GofioC" id="tarjetaGofio">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_11') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/Gofio.Cacao.webp') }}" alt="{{ __('gofio.gofio_11') }}" class="rounded-2xl">
                <div class="ProdB5">
                    <h4 id="tarjetaGofioTexto">{{ __('gofio.gofio_11') }}</h4>
    
                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
                </div>
            </div>
    
            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 3.50€</p>
            </div>
    
            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('gofio.gofio_111') }}</p>
    
                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('gofio.gofio_110') }}</p>
            </div>
    
            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaGofioBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
    </div>
</div>

@endsection