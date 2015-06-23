
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

//    App\User::find(3)->roles()->attach(1);
//
//    $user = App\User::find(2);
//    return $user->roles;
    return view('auth.login');
});


// Route::get('timesheets',['middleware' => 'ways', function () {
//
// }]);
//
//Route::get('admin',['middleware' => 'ways', function () {
//
//}]);

//Route::get('about', 'PagesController@about');
//Route::get('contact', 'PagesController@contact');
//
//Route::get('timesheets', 'TimesheetsController@index');
//Route::get('timesheets/create', 'TimesheetsController@create');
//Route::get('timesheets/{id}', 'TimesheetsController@show');
//Route::post('timesheets', 'TimesheetsController@store');




Route::resource('timesheets', 'TimesheetsController');

Route::resource('admin', 'AdminController');


Route::controllers([

        'auth' => 'Auth\AuthController',
        'passowrd' => 'Auth\PasswordController'
]);



