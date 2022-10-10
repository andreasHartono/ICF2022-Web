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

Route::get('/workshop', function () {
    return view('workshop');
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
Route::group(['middleware'=>'admin'], function() {
    Route::get('/dashboardadmin', 'AdminController@showWelcome');
    Route::resource('daftarevent', 'EventController');
    Route::get('/daftarevent/edit/{id}','EventController@edit');
    Route::put('/daftarevent/update/{event}','EventController@updateEvent');
});

Route::group(['middleware'=>'pubreg'], function() {
    // Route::get('/dashboardadmin', 'AdminController@showWelcome');
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
});

Route::group(['middleware'=>'auth'], function() {
    // Route Peserta
    Route::get('/peserta/daftarevents','EventController@front_event');
    Route::get('/peserta/add-to-cart/{event}', 'EventController@addToCart');
    Route::get('/peserta/cart','EventController@cart');
    Route::get('/registerlomba/5', function () {
        return view('peserta.registerhackaton');
    });
    Route::get('/registerlomba/6', function () {
        return view('peserta.registermlbb');
    });
    Route::get('/registerlomba/7', function () {
        return view('peserta.registertiktok');
    });
    Route::get('/registerlomba/8', function () {
        return view('peserta.registercomic');
    });

    Route::get('/daftarlomba','EventController@front_lomba');

    Route::post('/registercomprog','RegistrationController@storeHackaton');
    Route::post('/registermlbb','RegistrationController@storeMlbb');
    Route::post('/registertiktok','RegistrationController@storeTiktok');
    Route::post('/registercomic','RegistrationController@storeComic');
});
// Route::get('/home', 'HomeController@index')->name('home');




