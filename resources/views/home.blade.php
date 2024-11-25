@extends('layouts.app')

@section('content')
<div class="HomeA">
    <div class="HomeA1">
        <img src="{{ asset('imagenes/otros/LaCocinita.logoCabecera.webp') }}" alt="La Cocinita Mermeladas y Mojos">
    </div>
</div>

<div class="HomeB">
    <a href="{{ route('mermeladas') }}" class="HomeB1" id="fruta">
        <h3>{{ __('Mermeladas, zumos y concentrados') }}</h3>
    </a>
    <a href="{{ route('mojos') }}" class="HomeB1" id="mojo">
        <h3>{{ __('Mojos y salsas') }}</h3>
    </a>
    <a href="{{ route('gofio') }}" class="HomeB1" id="gofio">
        <h3>{{ __('Pella de gofio') }}</h3>
    </a>
</div>

<div class="HomeC">
    <h2>{{ __('home.home_01') }}</h2>
    <p>{{ __('home.home_02') }}</p>
    <p>{{ __('home.home_03') }}</p>

    <div class="HomeC1">
        <div class="HomeC1A">
            <i class="fi fi-ss-map-marker-check"></i>
            <h3>{{ __('home.home_04') }}</h3>
        </div>
        <div class="HomeC1A">
            <i class="fi fi-ss-handmade"></i>
            <h3>{{ __('home.home_05') }}</h3>
        </div>
        <div class="HomeC1A">
            <i class="fi fi-ss-airplane-journey"></i>
            <h3>{{ __('home.home_06') }}</h3>
        </div>
    </div>
</div>

<div class="HomeD">
    <h2>{{ __('home.home_07') }}</h2>
    <p>{{ __('home.home_08') }}</p>
    <p>{{ __('home.home_09') }} <a href="mailto:mermeladasymojoslacocinita@gmail.com">mermeladasymojoslacocinita@gmail.com</a> {{ __('home.home_090') }}</p>
    <p>{{ __('home.home_10') }}</p>
</div>

<div class="HomeE">
    
    <div class="HomeE1">
        <h2>{{ __('home.home_11') }}</h2>
        <p>{{ __('home.home_12') }}</p>
        <p>{{ __('home.home_13') }}</p>
        <ul>
            <li><span><i class="fi fi-rr-angle-small-right"></i> lorem ipsum</span> lorem ipsum</li>
        </ul>
    </div>

    <img src="{{ asset('imagenes/otros/LaCocinita.papaya.webp') }}" alt="La Cocinita Mermeladas y Mojos">
</div>
@endsection