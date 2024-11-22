<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;


Route::post('/idioma', function () {
	session(['locale' => request()->idioma]);
	return redirect()->back();
})->name('idioma');

Route::middleware(['language'])->group(function () {

    Route::view('/', 'home')->name('home');
    Route::get('/mermeladas', function () {return view('mermeladas');})->name('mermeladas');
    Route::get('/mojos', function () {return view('mojos');})->name('mojos');
    Route::get('/gofio', function () {return view('gofio');})->name('gofio');
    Route::get('/pedidos', function () {return view('pedidos');})->name('pedidos');
    Route::get('/encargos', function () {return view('encargos');})->name('encargos');
    Route::get('/contacto', function () {return view('contacto');})->name('contacto');

    /* ---------- Textos legales ---------- */

    Route::get('/privacidad', function () {return view('TextosLegales.privacidad');})->name('privacidad');
	Route::get('/avisoLegal', function () {return view('TextosLegales.avisoLegal');})->name('avisoLegal');
	Route::get('/cookies', function () {return view('TextosLegales.cookies');})->name('cookies');
	Route::get('/creditos', function () {return view('TextosLegales.creditos');})->name('creditos');
});

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('ContactoEnviar');