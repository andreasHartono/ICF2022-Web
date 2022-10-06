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

Route::get('/', function () {
   return view('home');
});

Route::get('/faq', function () {
   return view('faq');
});

Route::get('/daftar', function () {
   return view('peserta.daftar');
});

Route::get('/register', function () {
   return view('peserta.register');
});
// Auth::routes();
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

Route::resource('daftarevent', 'EventController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pesertaSeminarBigData','AdminController@showPesertaSeminarBigData');
Route::get('/pesertaSeminarMultiverse','AdminController@showPesertaSeminarMultiverse');
Route::get('/pesertaWorkshopHCI','AdminController@showPesertaWorkshopHCI');
Route::get('/pesertaWorkshopUI','AdminController@showPesertaWorkshopUI');
