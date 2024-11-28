@extends('layouts.app')

@section('content')
    <div class="EvA" id="EvA">
        <h2>{{ __('eventos.even_09') }}</h2>
    </div>

    <div class="EvB">
        <div class="EvD">
            <img src="{{ asset('imagenes/otros/LaCocinita.eventos1.webp') }}" alt="La Cocinita Mermeladas y Mojos">
        </div>

        <div class="EvC" id="EvC">
            <h3>{{ __('eventos.even_01') }}</h3>
            <h4>{{ __('eventos.even_02') }}</h4>
            <p>{{ __('eventos.even_03') }}</p>
            <p>{{ __('eventos.even_04') }}</p>
        </div>

        <div class="EvE">
            <img src="{{ asset('imagenes/otros/LaCocinita.eventos1.webp') }}" alt="La Cocinita Mermeladas y Mojos">
        </div>

        <div class="EvC" id="EvC">
            <h3>{{ __('eventos.even_05') }}</h3>
            <h4>{{ __('eventos.even_06') }}</h4>
            <p>{{ __('eventos.even_07') }}</p>
            <h5>{{ __('eventos.even_08') }}</h5>
        </div>

        <div class="EvG">
            <img src="{{ asset('imagenes/otros/LaCocinita.eventos2.webp') }}" alt="La Cocinita Mermeladas y Mojos">
        </div>
    </div>
@endsection