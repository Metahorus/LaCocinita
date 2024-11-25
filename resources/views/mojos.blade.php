@extends('layouts.app')

@section('content')
<div class="ProdA" id="mojo">
    <h2>{{ __('Mojos y salsas') }}</h2>
</div>

<div class="ProdB" id="mermeladas">
    <h3>{{ __('Mermeladas') }}</h3>

    <div class="ProdB1" >
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>
                </div>
                <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">Mermelada de naranja y jengibre sin azucar</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 30mL - 2.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p>

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

    </div>
</div>

@endsection