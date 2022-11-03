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

Route::get('/workshop', 'EventController@showWorkshop');
Route::get('/seminar', 'EventController@showseminar');
Route::get('/competition', 'EventController@showLomba');
 Route::get('/cart1', function () {
    return view('cart-bawaan');
 });




//  Route::get('/cart', function () {
//     return view('peserta.daftarevents');
//  });
//  Route::get('/chek', function () {
//     return view('peserta.tescart');
//  });

 Route::get('/aboutus', function () {
   return view('aboutus');
});



 Route::get('/product', function () {
    return view('product');
 });



Route::get('/daftar', function () {
   return view('peserta.daftar');
});

Route::get('/pameran', function () {
    return view('karya');
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
    Route::get('/pesertaSeminarMachine','AdminController@showPesertaSeminarMachine');
    Route::get('/pesertaSeminarARVR','AdminController@showPesertaARVR');
    Route::get('/pesertaSeminarHCI','AdminController@showPesertaWorkshopHCI');
    Route::get('/pesertaSeminarMultiverse','AdminController@showPesertaWorkshopUI');
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
    Route::get('/peserta/checkout','EventController@checkout');
    Route::get('/registerlomba/5', 'AccountController@registerPageComprog');
    Route::get('/registerlomba/6', 'AccountController@registerPageMLBB');
    Route::get('/registerlomba/7', 'AccountController@registerPageTiktok');
    Route::get('/registerlomba/8', 'AccountController@registerPageComic');

    Route::get('/daftarlomba','EventController@front_lomba');

    Route::post('/registercomprog','RegistrationController@storeHackaton');
    Route::post('/registermlbb','RegistrationController@storeMlbb');
    Route::post('/registertiktok','RegistrationController@storeTiktok');
    Route::post('/registercomic','RegistrationController@storeComic');

    Route::get('/showteam/{iduser}/{idevent}', 'TeamController@TeamDisplay');
    Route::get('/updateteam/{team}', 'TeamController@updateKartuPeserta');
    Route::get('/historyevents','EventController@historyEvents');
    Route::put('/uploadjawabancomprog/{team}', 'TeamController@uploadJawaban');
});
// Route::get('/home', 'HomeController@index')->name('home');




