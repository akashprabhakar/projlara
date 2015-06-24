
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

  // App\User::find(3)->roles()->attach(1);

  //   $user = App\User::find(3);
  //  return $user;
     return view('home');
});



Route::get('home',function () {
    return view('home');

});




Route::resource('timesheets', 'TimesheetsController');

Route::resource('admin', 'AdminController');


Route::controllers([

        'auth' => 'Auth\AuthController',
        'passowrd' => 'Auth\PasswordController'
]);

Route::get('generatecsv', 'TimesheetsController@generatecsv');
// Route::get('timesheets', function () {

//     \Auth::user()->roles()->attach(1);

//     $user = App\User::find(5);
//     return $user->roles;

//     // return view('timesheets.index');
     
// });

// Route::get('admin', function () {

//     \Auth::user()->roles()->attach(1);

//    // $user = App\User::find(5);
//    // return $user->roles;
     
// });
