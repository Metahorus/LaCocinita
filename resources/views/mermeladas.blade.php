@extends('layouts.app')

@section('content')

<div class="ProdA" id="fruta">
    <h2>{{ __('Mermeladas, zumos y concentrados') }}</h2>
</div>

<div class="ProdB" id="mermeladas">
    <h3>{{ __('Mermeladas') }}</h3>

    <div class="ProdB1" >
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_01') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Mango.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_01') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_01') }}</h4>

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
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_010') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_02') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Tunonar.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_02') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_02') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_020') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_03') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Tuno.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_03') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_03') }}</h4>

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
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_030') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_04') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Mar.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_04') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_04') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_040') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_05') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Pap.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_05') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_05') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 100gr - 3.50€</p>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_050') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_06') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.NarJen.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_06') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_06') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_060') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_07') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Papnar.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_07') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_07') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_070') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_08') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Cer.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_08') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_08') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_080') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>

        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_09') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/mermeladas/Mer.Lim.SA.250gr.webp') }}" alt="{{ __('mermeladas.merm_09') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('mermeladas.merm_09') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 250gr - 4.50€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('mermeladas.merm_090') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
        
    </div>
</div>

<div class="ProdB" id="zumos">
    <h3>{{ __('Zumos naturales') }}</h3>

    <div class="ProdB1" >
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('zumosyconcentrados.zum_01') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/zumos/Zu.Tuno.SA.500ml.webp') }}" alt="{{ __('zumosyconcentrados.zum_01') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('zumosyconcentrados.zum_01') }}</h4>

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
        
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('zumosyconcentrados.zum_02') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/zumos/Zu.Mar.SA.500ml.webp') }}" alt="{{ __('zumosyconcentrados.zum_02') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('zumosyconcentrados.zum_02') }}</h4>

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
                <p>{{ __('zumosyconcentrados.zum_020') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
    </div>
</div>

<div class="ProdB" id="concentrados">
    <h3>{{ __('Concentrados') }}</h3>

    <div class="ProdB1" >
        <div class="ProdB2" id="tarjetaMermeladas">
            <div class="ProdB3">
                <div class="ProdB4">
                    <h4 id="tarjetaMermeladasTexto">{{ __('zumosyconcentrados.zum_03') }}</h4>
                </div>
                <img src="{{ asset('imagenes/productos/zumos/Concentrado.Mar.500ml.webp') }}" alt="{{ __('zumosyconcentrados.zum_03') }}">
                <div class="ProdB5">
                    <h4 id="tarjetaMermeladasTexto">{{ __('zumosyconcentrados.zum_03') }}</h4>

                    <h5>{{ __('productos.prod_01') }}:</h5>
                    <p><i class="fi fi-tr-angle-small-right"></i> 500mL - 10€</p>
                </div>
            </div>

            <div class="ProdB6">
                <h5>{{ __('productos.prod_01') }}:</h5>
                <p><i class="fi fi-tr-angle-small-right"></i> 500mL - 10€</p>
            </div>

            <div class="ProdB7">
                {{-- <h5><i class="fi fi-sr-diamond-exclamation"></i> {{ __('productos.prod_02') }}:</h5>
                <p>Lorem, ipsum dolor.</p> --}}

                <h5>{{ __('productos.prod_03') }}:</h5>
                <p>{{ __('zumosyconcentrados.zum_030') }}</p>
            </div>

            {{-- <div class="ProdB8">
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
                <a href=""><h6 id="tarjetaMermeladasBoton">{{ __('productos.prod_01') }}</h6></a>
            </div> --}}
        </div>
    </div>
</div>

<div class="ProdZ"></div>
@endsection