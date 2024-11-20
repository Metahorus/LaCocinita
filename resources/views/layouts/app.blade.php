<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])


  <!-- Styles -->
  @livewireStyles

  <!-- Título -->
  <title>La Cocinita</title>

  <!-- Metadescripcion -->
  <meta name="description" content="Descubre nuestros productos artesanales: mermeladas, mojos, zumos y más. Elaborados con ingredientes frescos en el sur de Tenerife.">

  <!-- Keywords -->
  <meta name="keywords" content="Productos artesanales Tenerife, Mermeladas naturales, Mojos caseros, Salsas artesanales, Zumos naturales, Concentrados de frutas, Pellas de gofio Tenerife, Ingredientes frescos">

  <!-- Versión canónica -->
  <link rel="canonical" href="https://www.la-cocinita.com/">

  <!-- Robots -->
  <meta name="robots" content="index, follow"> 

  <!-- Favicon -->
  <link rel="icon" href="/imagenes/otros/favicon.ico"> 

  <!-- Autor -->
  <meta name="author" content="Metahorus">

  <!-- Título - Redes -->
  <meta name="og:title" content="La Cocinita. Mermeladas y mojos"> 
  <meta name="twitter:title" content="La Cocinita. Mermeladas y mojos"> 

  <!-- Descripción - Redes -->
  <meta name="og:description" content="Descubre nuestros productos artesanales: mermeladas, mojos, zumos y más. Elaborados con ingredientes frescos en el sur de Tenerife."> 
  <meta name="twitter:description" content="Descubre nuestros productos artesanales: mermeladas, mojos, zumos y más. Elaborados con ingredientes frescos en el sur de Tenerife."> 

</head>

<body>
  {{-- ------------------ Aviso de cookies ------------------ --}}
  <livewire:cookie-banner />

  {{-- ------------------ Barra de navegación ------------------ --}}
  <header>
    <nav x-cloak class="NavBar" x-data="{ open: false }"> 
      
      {{-- -------- NavBar Movil -------- --}}
      <div class="NavBarMovil">
        <a href="{{ route('home') }}">
          <h1 class="NavBarMovilLogo">
            <img src="{{ asset('imagenes/otros/LaCocinita.Gris.webp') }}" x-show="!open" alt="Enlace a inicio">
            <img src="{{ asset('imagenes/otros/LaCocinita.Gris.webp') }}" x-show="open" alt="Enlace a inicio">
          </h1>
        </a>

        <button @click="open = ! open">
          <img src="{{-- {{ asset('/') }} --}}" x-show="!open" alt="Abrir menú" class="">
          <img src="{{-- {{ asset('/') }} --}}" x-show="open" alt="Cerrar menú" class="">
        </button>
      </div>

      <div x-show="open" @click.outside="open = false" class="NavBarOverlay">        
        <h2>{{-- {{ __('') }} --}}</h2>
          <a href="{{-- {{ route('') }} --}}"><h3>{{-- {{ __('') }} --}}</h3></a>

        <a href="{{ route('contacto') }}" ><h2>{{ __('Contacto') }}</h2></a>

        <div x-data="{ open: false }">
          <h2 x-on:click="open = ! open" class="NavBarMovilIdiomas">
            {{ __('Elegir idioma') }}
            <img src="{{-- {{ asset('/') }} --}}" x-show="!open" alt="Elegir idioma">
            <img src="{{-- {{ asset('/') }} --}}" x-show="open" alt="Cerrar elegir idioma">
          </h2>

          <div x-show="open">
            <form action="{{ route('idioma') }}" method="POST">
              @csrf
              <input type="hidden" name="idioma" value="es">
              <button type="submit">
                <h3>Español</h3>
              </button>
            </form>

            <form action="{{ route('idioma') }}" method="POST">
              @csrf
              <input type="hidden" name="idioma" value="en">
              <button type="submit">
                <h3>English</h3>
              </button>
            </form>
          </div>
        </div>
      </div>

      {{-- -------- NavBar Pc -------- --}}

      <div class="NavBarPc">
        <div x-data="{ open: false }" class="NavBarPcEnlaces">
          <button @click="open = ! open">
            <h2>{{-- {{ __('') }} --}}</h2>
            <img src="{{-- {{ asset('/') }} --}}" x-show="!open" alt="Ver">
            <img src="{{-- {{ asset('/') }} --}}" x-show="open" alt="Cerrar">
          </button>
          
          <div x-show="open" @click.outside="open = false" class="NavBarPcOverlay">
            <a href="{{-- {{ route('') }} --}}"><h3>{{-- {{ __('') }} --}}</h3></a>
          </div>
        </div>

        <div x-data="{ open: false }" class="NavBarPcEnlaces NavBarPcIdiomas">
          <button @click="open = ! open">
            <h2 class="pt-1">@if (app()->getLocale() == 'es')
              Es
            @else
              En
            @endif</h2>
            <img src="{{-- {{ asset('/') }} --}}" x-show="!open" alt="Ver idiomas">
            <img src="{{-- {{ asset('/') }} --}}" x-show="open" alt="Cerrar idiomas">
          </button>
          
          <div x-show="open" @click.outside="open = false" class="NavBarPcOverlay NavBarPcOverlayIdiomas">
            <form action="{{ route('idioma') }}" method="POST">
              @csrf
              <input type="hidden" name="idioma" value="es">
              <button type="submit">
                <h3>Español</h3>
              </button>
            </form>

            <form action="{{ route('idioma') }}" method="POST">
              @csrf
              <input type="hidden" name="idioma" value="en">
              <button type="submit">
                <h3>English</h3>
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </header>
  {{-- ------------------ Contenido ------------------ --}}
  <main class="Contenido">
    @yield('content')
  </main>

  {{-- ------------------ Footer ------------------ --}}
  <footer>

    {{-- Enlaces a redes sociales --}}
    <div>
      <a href="tel:{{-- ... --}}">
        <img src="{{-- {{ asset('') }} --}}" alt="Teléfono">
      </a>

      <a href="{{-- https://wa.me/#### --}}">    
          <img src="{{-- {{ asset('') }} --}}" alt="Whatsapp">
      </a>

      <a href="mailto:{{-- ... --}}">    
          <img src="{{-- {{ asset('') }} --}}" alt="Correo electrónico">
      </a>

      <a href="{{-- URL --}}">
        <img src="{{-- {{ asset('') }} --}}" alt="Facebook">
      </a>

      <a href="{{-- URL --}}">
        <img src="{{-- {{ asset('') }} --}}" alt="Instagram">
      </a>

      <a href="{{-- URL --}}">
        <img src="{{-- {{ asset('') }} --}}" alt="Tiktok">
      </a>
    </div>


    {{-- Textos legales --}}
    <div>
      <h4>
        <a href="{{ route('privacidad') }}">{{ __('Privacidad') }}</a>
      </h4>

      <h4>
        <a href="{{ route('avisoLegal') }}">{{ __('Aviso Legal') }}</a>
      </h4>

      <h4>
        <a href="{{ route('cookies') }}">{{ __('Cookies') }}</a>
      </h4>

      <h4>
        <a href="{{ route('creditos') }}">{{ __('Creditos') }}</a>
      </h4>
    </div>

    <div class="FooterMetahorus">
      <h5>Copyright © {{ now()->year }} {{-- Nombre de la página --}} | {{ __('Derechos reservados') }} | {{ __('Desarrollado por') }}
        <a href="https://metahorus.es/" target="_blank" id="MetaHorus">MetaHorus</a>
      </h5>
    </div>
  </footer>
  @livewireScripts
</body>

</html>
