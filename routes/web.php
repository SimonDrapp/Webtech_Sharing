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
    return view('welcome');
});

Route::get('/Impressum', function () {
    return view('Impressum');
});

Route::get('/Vermieten', function () {
    return view('Vermieten');
});

Route::get('/AGB', function () {
    return view('AGB');
});
Route::get('/Login', function () {
    return view('/auth/login');
});
Route::get('/Registrieren', function () {
    return view('/auth/register');
});

Route::get('/Autoeigenschaft', function () {
    return view('EigenschaftAutovermietung');
});
Route::get('/Ansicht', function () {
    return view('AnsichtAuto');
});

Route::get('/Autoeigenschaft2', function () {
    return view('EigenschaftAutovermietung2');
});

/*------Notification---------*/

Route::post('/BenachrichtigungSpeichern', 'NotificationController@validateAndSave');

Route::get('/Thankyou', function () {
    return view('notification.thankyou');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
