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

// Route::get('/', function () {
//     return view('welcome');
// });




Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('auth')->group(function () {
    Route::post('/regsiter_account', 'AuthController@regsiter_account')->name('home');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('profile/select_account_type', 'UserProfileController@select_account_type');
    Route::post('profile/select_acc_type_store', 'UserProfileController@select_acc_type_store');
});


Route::group(['middleware' => ['auth', 'user_has_selected_ac_type']], function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', 'UserProfileController@index');
        Route::get('/edit', 'UserProfileController@edit');
        Route::post('/upload_profile_photo', 'UserProfileController@upload_profile_photo');
        Route::post('/update_basic_details', 'UserProfileController@update_basic_details');
        Route::post('/update_bio', 'UserProfileController@update_bio');
        Route::post('/update_address', 'UserProfileController@update_address');
    });
});
