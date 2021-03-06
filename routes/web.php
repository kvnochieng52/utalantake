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

Route::get('/terms_and_conditions', 'HomeController@terms_and_conditions');
Route::get('/contact_us', 'HomeController@contact_us');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('expert/{slug}', 'ExpertController@show');

Route::prefix('auth')->group(function () {
    Route::post('/regsiter_account', 'AuthController@regsiter_account')->name('home');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('profile/select_account_type', 'UserProfileController@select_account_type');
    Route::post('profile/select_acc_type_store', 'UserProfileController@select_acc_type_store');
});

Route::get('portfolio/view_portfolio', 'PortfolioController@view_portfolio');


Route::group(['middleware' => ['auth', 'user_has_selected_ac_type']], function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', 'UserProfileController@index');
        Route::get('/edit', 'UserProfileController@edit');
        Route::post('/upload_profile_photo', 'UserProfileController@upload_profile_photo');
        Route::post('/update_basic_details', 'UserProfileController@update_basic_details');
        Route::post('/update_bio', 'UserProfileController@update_bio');
        Route::post('/update_address', 'UserProfileController@update_address');
    });

    Route::prefix('industry')->group(function () {
        Route::post('/update_industries', 'IndustryController@update_industries');
    });

    Route::prefix('skill')->group(function () {
        Route::post('/add_skill', 'SkillController@add_skill');
    });


    Route::prefix('education')->group(function () {
        Route::post('/add_education', 'EducationController@add_education');
    });


    Route::prefix('work_experience')->group(function () {
        Route::post('/add_work_experience', 'WorkExperienceController@add_work_experience');
    });


    Route::prefix('portfolio')->group(function () {
        Route::any('/upload_portfolio', 'PortfolioController@upload_portfolio');
        Route::any('/add_portfolio', 'PortfolioController@add_portfolio');
    });


    Route::prefix('job')->group(function () {
        Route::get('/', 'JobController@index');
        Route::get('/start', 'JobController@start');
        Route::get('/start_process', 'JobController@start_process');
        Route::get('/post_task', 'JobController@post_task');
        Route::get('/post_job', 'JobController@post_job');
        Route::get('/post', 'JobController@post');



        Route::post('/post_task_process', 'JobController@post_task_process');

        Route::post('/save', 'JobController@save');
        Route::post('/upload_attachments', 'JobController@upload_attachments');
    });
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/under_construction', 'HomeController@under_construction');
Route::get('skill/autocomplete_skills', 'SkillController@autocomplete_skills');

Route::prefix('search')->group(function () {
    Route::get('/expert', 'SearchController@expert');
    Route::get('/location_autocomplete', 'SearchController@location_autocomplete');
    Route::get('/expert_process', 'SearchController@expert_process');
});
