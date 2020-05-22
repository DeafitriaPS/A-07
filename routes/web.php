<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/siswa', "SiswaController@index")->middleware('auth');;
Route::get('/siswa/{id}/edit', "SiswaController@edit")->middleware('auth');;
Route::post('/siswa/{id}/update', "SiswaController@update")->middleware('auth');;

Route::get('/profil', "ProfilController@index")->middleware('auth');;
Route::get('editprofil', "ProfilController@edit")->middleware('auth');;
Route::post('editprofil/update', "SiswaController@update")->middleware('auth');;


Route::get('/zodiak', function () {
    return view('halutama');
})->middleware('auth')->name('home');



Route::get('/registrasinew', 'AuthController@getRegister')->name('registrasi')->middleware('guest');
Route::post('/registrasinew', 'AuthController@postRegister')->middleware('guest');
Route::get('/', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/', 'AuthController@postLogin')->middleware('guest');


//Route::post('/siswa/{id}/update', "SiswaController@update")->middleware('auth');;



Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');


Route::get('/halguest', 'GuestController@halguest');
Route::get('/ariesguest', 'GuestController@aries');
Route::get('/aquariusguest', 'GuestController@aquarius');
Route::get('/cancerguest', 'GuestController@cancer');
Route::get('/capricornguest', 'GuestController@capricorn');
Route::get('/geminiguest', 'GuestController@gemini');
Route::get('/leoguest', 'GuestController@leo');
Route::get('/libraguest', 'GuestController@libra');
Route::get('/piscesguest', 'GuestController@pisces');
Route::get('/sagitariusguest', 'GuestController@sagitarius');
Route::get('/scorpioguest', 'GuestController@scorpio');
Route::get('/taurusguest', 'GuestController@taurus');
Route::get('/virgoguest', 'GuestController@virgo');

Route::get('/weton', function() {
	return view('weton');
})->middleware('auth');;


Route::get('/VIRGO', function() {
	return view('virgo');
})->middleware('auth');;

Route::get('/TAURUS', function() {
	return view('taurus');
})->middleware('auth');;

Route::get('/ARIES', function() {
	return view('aries');
})->middleware('auth');;

Route::get('/GEMINI', function() {
	return view('gemini');
})->middleware('auth');;

Route::get('/CANCER', function() {
	return view('cancer');
})->middleware('auth');;

Route::get('/LEO', function() {
	return view('leo');
})->middleware('auth');;

Route::get('/LIBRA', function() {
	return view('libra');
})->middleware('auth');;

Route::get('/SCORPIO', function() {
	return view('scorpio');
})->middleware('auth');;

Route::get('/SAGITARIUS', function() {
	return view('sagitarius');
})->middleware('auth');;

Route::get('/CAPRICORN', function() {
	return view('capricorn');
})->middleware('auth');;

Route::get('/AQUARIUS', function() {
	return view('aquarius');
})->middleware('auth');;

Route::get('/PISCES', function() {
	return view('pisces');
})->middleware('auth');;

Route::get('/SHIO', function() {
	return view('halshio');
})->middleware('auth');

Route::get('/NAGA', function() {
	return view('naga');
})->middleware('auth');;

Route::get('/TIKUS', function() {
	return view('tikus');
})->middleware('auth');;

Route::get('/KERBAU', function() {
	return view('kerbau');
})->middleware('auth');;

Route::get('/MACAN', function() {
	return view('macan');
})->middleware('auth');;

Route::get('/KELINCI', function() {
	return view('kelinci');
})->middleware('auth');;

Route::get('/ULAR', function() {
	return view('ular');
})->middleware('auth');;

Route::get('/KUDA', function() {
	return view('kuda');
})->middleware('auth');;

Route::get('/KAMBING', function() {
	return view('kambing');
})->middleware('auth');;

Route::get('/MONYET', function() {
	return view('monyet');
})->middleware('auth');;

Route::get('/AYAM', function() {
	return view('ayam');
})->middleware('auth');;

Route::get('/ANJING', function() {
	return view('anjing');
})->middleware('auth');;

Route::get('/BABI', function() {
	return view('babi');
})->middleware('auth');;

Route::get('/aboutus', function() {
	return view('aboutus');
});

Route::get('/input', 'CariZodiakController@input')->middleware('auth');

Route::post('/proses', 'CariZodiakController@proses')->middleware('auth');

Route::get('/inputshio', 'CariShioController@input')->middleware('auth');

Route::post('/prosesshio', 'CariShioController@proses')->middleware('auth');

Route::get('/jodohweton', 'JodohWetonController@input')->middleware('auth');;

Route::post('/prosesweton', 'JodohWetonController@proses')->middleware('auth');;

Route::get('/jodohzodiak', 'JodohZodiakController@input')->middleware('auth');;

Route::post('/prosesjodohzodiak', 'JodohZodiakController@proses')->middleware('auth');;

Route::get('/halmingguan', 'SiswaController@mingguan')->middleware('auth');;

Route::get('/mingguanaries', 'SiswaController@aries')->middleware('auth');;

Route::get('/inputweton', 'CariWetonController@input')->middleware('auth');;

Route::post('/prosespilihweton', 'CariWetonController@proses')->middleware('auth');;