<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('nosotros', function () {
    return view('about');
})->name('nosotros');

Route::get('servicios', function () {
    return view('service');
})->name('servicios');

Route::get('contactos', function () {
    return view('contact');
})->name('contactos');

Route::get('cv', function(){
	return view('curriculum/curriculum');
})->name('curriculum');

Route::post('message', function(){

	//Enviar correo al dueño de la pagina
	$data = request()->all();
	Mail::send("emails.message", $data, function($message) use($data) {

		$message->from($data['email'], $data['name'])
		->to('muskafly@hotmail.com', 'Cristian Hurtado')
		->subject($data['subject']);
	});
	//Responder al usuario
	return back()->with('flash','Tu mensaje a sido recibido');
})->name('messages');
