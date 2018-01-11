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
use App\Http\Controllers\AuthController;



Route::get('/', 'welcomeController@index');

Route::get('/Impressum', function () {
    return view('Impressum');
});

Route::get('/AGB', function () {
    return view('AGB');
});
/*Route::get('/Login', function () {
    return view('/auth/login');
});
*/
Route::get('/LoginRegister', function () {
    return view('/auth/loginRegister');
});
/*
Route::get('/Registrieren', function () {
    return view('/auth/register');
});
*/
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
    return view('AnsichtFahrrad');
});

Route::get('/allgemeineSuche', function () {
    return view('allgemeineSuche');
});
Route::get('/Bezahlen', function () {
    return view('Bezahlen');
});
/*Route::get('/allgemeineSuche', function () {

    $aMarken = DB::table('AMarke')->get();


    return view('allgemeineSuche',compact('aMarken'));
});*/

Route::resource('allgemeineSuche','allgemeineSucheController');
Route::get('/findAutoModelle', 'allgemeineSucheController@findAutoModelle');
Route::get('/search','allgemeineSucheController@search');
Route::get('/searchVehicles','allgemeineSucheController@searchVehicles');



Route::get('/Bild', function () {
    return view('bild');
});

Route::get('/Bild2', function () {
    return view('bild2');
});



/*
Route::get('/Vermieten', function () {
    return view('Vermieten');
});
*/



Route::group(['middleware' => 'web'], function () {

Route::get('/Login',[
    'uses'=> 'AuthController@getloginPage',
    'as'=>'signin'
]);

Route::post('/Login',[
    'uses'=> 'AuthController@postlogin',
    'as'=>'signin2'
]);
Route::get('/Registrieren', [
    'uses' => 'AuthController@getSignUpPage',
    'as' => 'signup'
]);

Route::post('/Registrieren',[
    'uses'=>'AuthController@postSignUp',
    'as'=>'signup2'
]);
Route::get('/logout', [
    'uses' => 'AuthController@getLogout',
    'as' => 'logout'
]);

Route::get('/Vermieten',[
   'uses'=> 'VermietenController@check',
    'as'=> 'Vermieten',
    'middleware'=>'roles',
    'roles'=>['Benutzer', 'Admin']
    ]);

Route::get('/Autogeigenschaft',[
        'uses'=> 'AutovermietungController@prodfunct',
        'as'=> 'Autoeigenschaft',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::get('/findModellName',[
        'uses'=> 'AutovermietungController@findModellName',
        'as'=> 'AutoeigenschaftModell',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::post('/Autogeigenschaft2',[
        'uses'=> 'AutovermietungController@putCar',
        'as'=> 'Autoeigenschaft2',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::post('/welcome',[
        'uses'=> 'AutovermietungController@saveAuto',
        'as'=> 'Autoeigenschaft3',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::get('/Fahrradeigenschaft',[
        'uses'=> 'FahrradvermietungController@findFahrrad',
        'as'=> 'Fahrradeigenschaft',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::get('/findMarkeNameFahrrad',[
        'uses'=> 'FahrradvermietungController@findMarkeNameFahrrad',
        'as'=> 'FahrradeigenschaftMarke',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::get('/findModellNameFahrrad',[
        'uses'=> 'FahrradvermietungController@findModellNameFahrrad',
        'as'=> 'FahrradeigenschaftModell',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::post('/Fahrradeigenschaft2',[
        'uses'=> 'FahrradvermietungController@putFahrrad',
        'as'=> 'Fahrradeigenschaft2',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);

Route::post('/',[
        'uses'=> 'FahrradvermietungController@saveFahrrad',
        'as'=> 'Fahrradeigenschaft3',
        'middleware'=>'roles',
        'roles'=>['Benutzer', 'Admin']
]);


});









/*Route::get('/findModellName','AutovermietungController@findModellName');  */

/*Route::get('/findAutotyp','AutovermietungController@findAutotyp');    */

/*Route::post('/Autoeigenschaft2',[
    'uses'=> 'AutovermietungController@putCar',
]);
*/
/*
Route::post('/#',[
    'uses'=> 'AutovermietungController@saveAuto'
]);
*/


/*
Route::get('findMarkeNameFahrrad', 'FahrradvermietungController@findMarkeNameFahrrad');
*/
/*
Route::get('findModellNameFahrrad', 'FahrradvermietungController@findModellNameFahrrad');
*/

/*
Route::post('/',[
    'uses'=> 'FahrradvermietungController@saveFahrrad'
]);

*/




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

Route::get('/Ansicht/{id}', 'AnsichtAutoController@show');

Route::get('/home', 'HomeController@index')->name('home');
