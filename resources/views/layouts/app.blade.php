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
          <i class="fi fi-sr-apps" x-show="!open" alt="Abrir menú"></i>
          <i class="fi fi-rr-apps" x-show="open" alt="Cerrar menú"></i>
        </button>
      </div>

      <div x-show="open" @click.outside="open = false" class="NavBarOverlay">        
        <a href="{{ route('mermeladas') }}"><h2>{{ __('Mermeladas, zumos y concentrados') }}</h2></a>
          <a href="{{ route('mermeladas') }}#mermeladas"><h3>{{ __('Mermeladas') }}</h3></a>
          <a href="{{ route('mermeladas') }}#zumos"><h3>{{ __('Zumos naturales') }}</h3></a>
          <a href="{{ route('mermeladas') }}#concentrados"><h3>{{ __('Concentrados') }}</h3></a>

        <a href="{{ route('mojos') }}"><h2 class="pt-2">{{ __('Mojos y salsas') }}</h2></a>
          <a href="{{ route('mojos') }}#mermeladas"><h3>{{ __('Mojos') }}</h3></a>
          <a href="{{ route('mojos') }}#zumos"><h3>{{ __('Salsas') }}</h3></a>

        <a href="{{ route('gofio') }}"><h2 class="pt-2">{{ __('Pella de gofio') }}</h2></a>
        <a href="{{ route('pedidos') }}"><h2 class="pt-2">{{ __('Pedidos') }}</h2></a>
        <a href="{{ route('encargos') }}"><h2>{{ __('Encargos y regalos') }}</h2></a>
        <a href="{{ route('contacto') }}"><h2>{{ __('Contacto') }}</h2></a>

        <div x-data="{ open: false }">
          <h2 x-on:click="open = ! open" class="NavBarMovilIdiomas">
            {{ __('Elegir idioma') }}
            <i class="fi fi-sr-angle-circle-down" x-show="!open" alt="Elegir idioma"></i>
            <i class="fi fi-sr-angle-circle-up" x-show="open" alt="Cerrar elegir idioma"></i>
          </h2>

          <div x-show="open" class="NavBarMovilIdiomasContenido">
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

            <form action="{{ route('idioma') }}" method="POST">
              @csrf
              <input type="hidden" name="idioma" value="de">
              <button type="submit">
                <h3>Deutsch</h3>
              </button>
            </form>

            <form action="{{ route('idioma') }}" method="POST">
              @csrf
              <input type="hidden" name="idioma" value="fr">
              <button type="submit">
                <h3>Français</h3>
              </button>
            </form>
          </div>
        </div>
      </div>

      {{-- -------- NavBar Pc -------- --}}

      <div class="NavBarPc">
        <a href="{{ route('home') }}">
          <h1 class="NavBarPcLogo">
            <img src="{{ asset('imagenes/otros/LaCocinita.Gris.webp') }}" x-show="!open" alt="Enlace a inicio">
            <img src="{{ asset('imagenes/otros/LaCocinita.Gris.webp') }}" x-show="open" alt="Enlace a inicio">
          </h1>
        </a>

        <div class="NavBarPcGridA">
          <div x-data="{ open: false }" class="NavBarPcEnlaces">
            <button @click="open = ! open">
              <h2>{{ __('Productos') }}</h2>
              <i class="fi fi-sr-caret-down" x-show="!open" alt="Abrir"></i>
              <i class="fi fi-sr-caret-up" x-show="open" alt="Cerrar"></i>
            </button>
            
            <div x-show="open" @click.outside="open = false" class="NavBarPcOverlay">
              <a href="{{ route('mermeladas') }}"><h3>{{ __('Mermeladas, zumos y concentrados') }}</h3></a>
                <a href="{{ route('mermeladas') }}#mermeladas"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Mermeladas') }}</h4></a>
                <a href="{{ route('mermeladas') }}#zumos"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Zumos naturales') }}</h4></a>
                <a href="{{ route('mermeladas') }}#concentrados"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Concentrados') }}</h4></a>

              <a href="{{ route('mojos') }}"><h3 class="pt-2">{{ __('Mojos y salsas') }}</h3></a>
                <a href="{{ route('mojos') }}#mermeladas"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Mojos') }}</h4></a>
                <a href="{{ route('mojos') }}#zumos"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Salsas') }}</h4></a>
              <a href="{{ route('gofio') }}"><h3 class="pt-2">{{ __('Pella de gofio') }}</h3></a>
            </div>
          </div>

          <a href="{{ route('pedidos') }}"><h2>{{ __('Pedidos') }}</h2></a>
          <a href="{{ route('encargos') }}"><h2>{{ __('Encargos y regalos') }}</h2></a>
          <a href="{{ route('contacto') }}"><h2>{{ __('Contacto') }}</h2></a>

          <div x-data="{ open: false }" class="NavBarPcEnlaces NavBarPcIdiomas">
            <button @click="open = ! open">
              <h2>@if (app()->getLocale() == 'es')
                Es
                @elseif (app()->getLocale() == 'de')
                De
                @elseif (app()->getLocale() == 'fr')
                Fr
              @else
                En
              @endif</h2>
              <i class="fi fi-sr-caret-down" x-show="!open" alt="Abrir"></i>
              <i class="fi fi-sr-caret-up" x-show="open" alt="Cerrar"></i>
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

              <form action="{{ route('idioma') }}" method="POST">
                @csrf
                <input type="hidden" name="idioma" value="de">
                <button type="submit">
                  <h3>Deutsch</h3>
                </button>
              </form>

              <form action="{{ route('idioma') }}" method="POST">
                @csrf
                <input type="hidden" name="idioma" value="fr">
                <button type="submit">
                  <h3>Français</h3>
                </button>
              </form>
            </div>
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
    <div class="Footer">
      <div class="FooterA">
        <div class="FooterA1">
          <a href="tel:622902641">
            <i class="fi fi-rs-circle-phone"></i>
          </a>
          <a href="https://wa.me/+34622902641">
            <i class="fi fi-brands-whatsapp"></i>
          </a>
          <a href="https://www.instagram.com/lacocinitamermeladasymojos/">
            <i class="fi fi-brands-instagram"></i>
          </a>
          <a href="https://www.facebook.com/luzmateodiaz1409">
            <i class="fi fi-brands-facebook"></i>
          </a>
        </div>
    
        <div class="FooterA2">
          <a href="{{ route('home') }}">
            <img src="{{ asset('imagenes/otros/LaCocinita.Blanco.webp') }}"alt="Enlace a inicio">
          </a>
        </div>

        <div class="FooterB">
          
          <div class="FooterB1">
            <a href="{{ route('mermeladas') }}"><h3>{{ __('Mermeladas, zumos y concentrados') }}</h3></a>
                <a href="{{ route('mermeladas') }}#mermeladas"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Mermeladas') }}</h4></a>
                <a href="{{ route('mermeladas') }}#zumos"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Zumos naturales') }}</h4></a>
                <a href="{{ route('mermeladas') }}#concentrados"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Concentrados') }}</h4></a>
          </div>

          <div class="FooterB1">
            <a href="{{ route('mojos') }}"><h3>{{ __('Mojos y salsas') }}</h3></a>
              <a href="{{ route('mojos') }}#mermeladas"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Mojos') }}</h4></a>
              <a href="{{ route('mojos') }}#zumos"><h4><i class="fi fi-rr-angle-small-right"></i> {{ __('Salsas') }}</h4></a>
            <a href="{{ route('gofio') }}"><h3 class="pt-2">{{ __('Pella de gofio') }}</h3></a>
          </div>

          <div class="FooterB1">
            <a href="{{ route('pedidos') }}"><h3>{{ __('Pedidos') }}</h3></a>
            <a href="{{ route('encargos') }}"><h3>{{ __('Encargos y regalos') }}</h3></a>
            <a href="{{ route('contacto') }}"><h3>{{ __('Contacto') }}</h3></a>
          </div>
          
          <div class="FooterB1">
            <a href="{{ route('privacidad') }}"><h4>{{ __('Privacidad') }}</h4></a>    
            <a href="{{ route('avisoLegal') }}"><h4>{{ __('Aviso Legal') }}</h4></a>    
            <a href="{{ route('cookies') }}"><h4>{{ __('Cookies') }}</h4></a>    
            <a href="{{ route('creditos') }}"><h4>{{ __('Creditos') }}</h4></a>
          </div>
        </div>
        
      </div>
  
      <div class="FooterMetahorus">
        <h5>Copyright © {{ now()->year }} La Cocinita | {{ __('Derechos reservados') }} | {{ __('Desarrollado por') }}
          <a href="https://metahorus.es/" target="_blank" id="MetaHorus">MetaHorus</a>
        </h5>
      </div>
    </div>
  </footer>
  @livewireScripts
</body>

</html>
