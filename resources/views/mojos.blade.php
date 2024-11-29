@extends('layouts.app')

@section('content')
<div class="ProdA" id="mojo">
    <h2>{{ __('Mojos y salsas') }}</h2>
</div>

<div class="ProdB" id="mojos">
    <h3>{{ __('Mojos') }}</h3>

    <div class="ProdB1" >
        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_01') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Mojo.VerdePic.webp') }}" alt="{{ __('mojos.mojo_01') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_01') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_010') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_02') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Mojo.Picante1.webp') }}" alt="{{ __('mojos.mojo_02') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_02') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_020') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_03') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Mojo.PalmeroPicon.webp') }}" alt="{{ __('mojos.mojo_03') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_03') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_030') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_04') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Mojo.Rojo.webp') }}" alt="{{ __('mojos.mojo_04') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_04') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_040') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_05') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Mojo.Picon.webp') }}" alt="{{ __('mojos.mojo_05') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_05') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_050') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_06') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Almogrote.webp') }}" alt="{{ __('mojos.mojo_06') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_06') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4.5€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5.5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4.5€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5.5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}, {{ __('productos.prod_05') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_060') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_07') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Mojo.Cilantro.webp') }}" alt="{{ __('mojos.mojo_07') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_07') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_070') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMojos">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_08') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mojos/Mojo.Almendras.webp') }}" alt="{{ __('mojos.mojo_08') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMojosTexto">{{ __('mojos.mojo_08') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100mL - 4€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250mL - 5€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>{{ __('productos.prod_04') }}, {{ __('productos.prod_06') }}</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mojos.mojo_080') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        
    </div>
</div>

{{-- <div class="ProdB" id="salsas">
    <h3>{{ __('Salsas') }}</h3>
</div> --}}

<div class="ProdZ"></div>

@endsection