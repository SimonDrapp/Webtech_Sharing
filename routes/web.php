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

Route::get('/Fahrradeigenschaft', function () {
    return view('Fahrradvermietung');
});

Route::get('/Autoeigenschaft2', function () {
    return view('EigenschaftAutovermietung2');
});

Route::get('/Fahrradeigenschaft2', function () {
    return view('Fahrradvermietung2');
});

Route::get('/Ansicht', function () {
    return view('AnsichtAuto');
});

/*Route::get('/allgemeineSuche', function () {

    $aMarken = DB::table('AMarke')->get();


    return view('allgemeineSuche',compact('aMarken'));
});*/

Route::resource('allgemeineSuche','allgemeineSucheController');





Route::get('/Autoeigenschaft', 'AutovermietungController@prodfunct');

Route::get('/findModellName','AutovermietungController@findModellName');

Route::get('/findAutotyp','AutovermietungController@findAutotyp');



/*Route::get('/Amarke', function(){
    $amarke = AMarke::all();
    return view('posts.index')->with('amarke',$amarke);
});

Route::get('/ajax-subcat', function() {

    $cat_id = Input::get('cat_id');
    $amodelle = AModell::where('idAmarke', '=', $cat_id)->get();

    return Response::json($amodelle);

});

*/


/*------Notification---------*/

Route::post('/BenachrichtigungSpeichern', 'NotificationController@validateAndSave');

Route::get('/Thankyou', function () {
    return view('notification.thankyou');
});

Route::get('/NachrichtenAnzeigen', 'NotificationController@showAllContacts');

Route::get('/NachrichtAnzeigen/{id}', 'NotificationController@showContact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
