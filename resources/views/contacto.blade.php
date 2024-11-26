@extends('layouts.app')

@section('content')

<div class="Contacto">

    <div class="ContactoA">
        <h2>Contacto</h2>
    
        <div x-data="{show: true}" class="ContactoB">
            <form action="{{ route ('ContactoEnviar') }}" id="contact-form" name="contact-form" method="POST" class="ContactoC">
                @csrf
    
                <input type="text" id="middlename" name="middlename" class="hidden" placeholder="Apellido">
    
                <label for="name">{{ __('contacto.cont_01') }}</label>
                <input type="text" id="name" name="name" style="max-width: 70vw" class="focus:ring-0"
                    placeholder="Nombre" required>
    
                <label for="email">{{ __('contacto.cont_02') }}</label>
                <input type="text" id="email" name="email" style="max-width: 70vw" class="focus:ring-0"
                    placeholder="Email" required>
    
                <label for="message">{{ __('contacto.cont_03') }}</label>
                <textarea type="text" id="message" name="message" style="max-width: 70vw" class="focus:ring-0"
                    placeholder=" ..." required></textarea>
    
                <div>
                    <input class="mr-2 focus:ring-0" type="checkbox" value="" id="ContactoCkeckbox" required>
                    <label for="ContactoCkeckbox">
                        {{ __('contacto.cont_04') }} 
                        <a href="{{ route('avisoLegal') }}">
                            {{ __('contacto.cont_05') }}
                        </a>
                        {{ __('contacto.cont_06') }}
                        <a href="{{ route('privacidad') }}">
                            {{ __('contacto.cont_07') }}
                        </a>
                    </label>
                </div>
    
                <div class="ContactoD">
                    <button type="submit" >{{ __('contacto.cont_08') }}</button>
                </div>
    
                @if ($errors->any())
                <div x-show="show" class="ContactoE">
                    @foreach ($errors->all() as $error)
                        <h4><i class="fi fi-sr-exclamation"></i> {{ $error }}</h4>
                    @endforeach
                </div>
                @endif
    
                @if (session('info'))
                <div x-show="show" class="ContactoE">
                    <h4> {{ session('info') }}</h4>
                </div>
                @endif 
            </form>
        </div>

        <div class="ContactoF">
            <h3>{{ __('contacto.cont_09') }}:</h3>
            <ul>
                <li><h4>- {{ __('contacto.cont_10') }}: <a href="tel:622902641">622 90 26 41</a></h4></li>
                <li><h4>- {{ __('contacto.cont_11') }}: <a href="mailto:mermeladasymojoslacocinita@gmail.com">mermeladasymojoslacocinita@gmail.com</a></h4></li>
                <li><h4>- {{ __('contacto.cont_12') }}: <a href="https://www.instagram.com/lacocinitamermeladasymojos/">Instagram</a> o <a href="https://www.facebook.com/luzmateodiaz1409">Facebook</a></h4></li>
            </ul>
        </div>
    </div>

</div>
@endsection