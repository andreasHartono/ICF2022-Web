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

// Auth::routes();

Route::get('/', function () {
   return view('home');
});

Route::get('/faq', function () {
   return view('faq');
});

Route::get('/daftar', function () {
   return view('peserta.daftar');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login_detail', 'AccountController@authenticate');
Route::post('/logout', 'AccountController@logout');

Route::get('/register', 'AccountController@registerPage');
Route::post('/register_detail','AccountController@register');

Route::get('/registerhackaton', function () {
   return view('peserta.registerhackaton');
});
Route::get('/registercomic', function () {
   return view('peserta.registercomic');
});
Route::get('/registermlbb', function () {
   return view('peserta.registermlbb');
});

Route::get('/dashboardadmin', function () {
   return view('admin.adminwelcome');
});

Route::get('/dashboardpeserta', function () {
   return view('peserta.dashboardpeserta');
});

Route::get('/tim', function () {
   return view('peserta.tim');
});

Route::get('/peserta', function () {
   return view('peserta.peserta');
});

Route::get('/soal', function () {
   return view('peserta.soal');
});

// Route Admin
Route::resource('daftarevent', 'EventController');
Route::get('/daftarevent/edit/{id}','EventController@edit');
Route::put('/daftarevent/update/{event}','EventController@updateEvent');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pesertaSeminarBigData','AdminController@showPesertaSeminarBigData');
Route::get('/pesertaSeminarMultiverse','AdminController@showPesertaSeminarMultiverse');
Route::get('/pesertaWorkshopHCI','AdminController@showPesertaWorkshopHCI');
Route::get('/pesertaWorkshopUI','AdminController@showPesertaWorkshopUI');
Route::get('/timLombaHackaton','TeamController@showTimHackaton');
Route::get('/timLombaMLBB','TeamController@showTimMlbb');
Route::get('/pesertaTiktok','TeamController@showPesertaTiktok');
Route::get('/timLombaComic','TeamController@showTimComic');
Route::get('/showpeserta/{id}','TeamController@showPesertaLomba');
Route::put('lomba/confirm/{team}','TeamController@confirmation');
Route::put('lomba/reject/{team}','TeamController@rejectConfirmation');

// Route Peserta
Route::get('/peserta/daftarevents','EventController@front_event');
