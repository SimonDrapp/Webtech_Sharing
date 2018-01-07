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

use App\AMarke;
use App\AModell;
use Illuminate\Http\Request;

Route::get('/', 'welcomeController@index');

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

Route::get('/Autoeigenschaft2', function () {
    return view('EigenschaftAutovermietung2');
});

Route::get('/Fahrradeigenschaft', function () {
    return view('Fahrradvermietung');
});

Route::get('/Fahrradeigenschaft2', function () {
    return view('Fahrradvermietung2');
});

Route::get('/Fahrradeigenschaft3', function () {
    return view('Fahrradvermietung3');
});

Route::get('/Ansicht', function () {
    return view('AnsichtAuto');
});

/*Route::get('/allgemeineSuche', function () {

    $aMarken = DB::table('AMarke')->get();


    return view('allgemeineSuche',compact('aMarken'));
});*/

Route::resource('allgemeineSuche','allgemeineSucheController');
Route::get('/findAutoModelle', 'allgemeineSucheController@findAutoModelle');
Route::get('/search','allgemeineSucheController@search');



Route::get('/Bild', function () {
    return view('bild');
});

Route::get('/Bild2', function () {
    return view('bild2');
});

Route::get('/Drag', function () {
    return view('DragAndDrop');
});

Route::get('/Drag2', function () {
    return view('DragAndDropBild');
});



Route::get('/Autoeigenschaft', 'AutovermietungController@prodfunct');

Route::get('/findModellName','AutovermietungController@findModellName');

Route::get('/findAutotyp','AutovermietungController@findAutotyp');

Route::post('/Autoeigenschaft2',[
    'uses'=> 'AutovermietungController@putCar'
]);

Route::post('/',[
    'uses'=> 'AutovermietungController@saveAuto'
]);



Route::get('/Fahrradeigenschaft', 'FahrradvermietungController@findFahrrad');

Route::get('findMarkeNameFahrrad', 'FahrradvermietungController@findMarkeNameFahrrad');

Route::get('findModellNameFahrrad', 'FahrradvermietungController@findModellNameFahrrad');

Route::post('/Fahrradeigenschaft2',[
    'uses'=> 'FahrradvermietungController@putFahrrad'
]);

Route::post('/Vermieten',[
    'uses'=> 'FahrradvermietungController@saveFahrrad'
]);





//Route::get('/Fahrradeigenschaft2', 'FahrradvermietungController@safeFahrrad');
//Route::resource('amarke', 'FahrradSafeController');




/*------Notification---------*/

Route::post('/BenachrichtigungSpeichern', 'NotificationController@validateAndSave');

Route::get('/Thankyou', function () {
    return view('notification.thankyou');
});

Route::get('/NachrichtenAnzeigen', 'NotificationController@showAllContacts');

Route::get('/NachrichtAnzeigen/{id}', 'NotificationController@showContact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
