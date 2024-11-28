@extends('layouts.app')

@section('content')
<div class="PedidosA" id="PedA">
    <h2>{{ __('pedidos.ped_01') }}</h2>
</div>

<div class="PedidosB">
    <div class="PedidosC" id="PedC">
        <h3>{!! __('pedidos.ped_02') !!}</h3>
        <h4>{!! __('pedidos.ped_03') !!}</h4>
    
        <p>{!! __('pedidos.ped_04') !!}</p>
        <p>{!! __('pedidos.ped_05') !!}</p>
        <p>{!! __('pedidos.ped_06') !!}</p>
    
        <h5>{!! __('pedidos.ped_07') !!}</h5>

        <div class="PedidosD">
            <a href="https://wa.me/+34622902641"><h4>Whatsapp: 622 90 26 41</h4></a>
            <a href="mailto:mermeladasymojoslacocinita@gmail.com" target="_blank"><h4>{!! __('pedidos.ped_08') !!}</h4></a>
        </div>
    </div>

    <div class="PedidosD">
        <img src="{{ asset('imagenes/otros/LaCocinita.pedidos1.webp') }}" alt="La Cocinita Mermeladas y Mojos">
    </div>
</div>
@endsection