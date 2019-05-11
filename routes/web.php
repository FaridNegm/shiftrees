<?php

use Illuminate\Support\Facades\Auth;

// Start Admin Routes
Route::get('locale/{lang}', function($lang){
    Session::put('locale' , $lang);
    return redirect()->back();
});

Route::group(['namespace' => 'Admin' , 'prefix' => 'admin' , 'middleware' => 'auth_login'] , function (){

    Route::get('dashboard' , 'homeController@index');

    // Users Routes
    Route::get('user' , 'AllUserController@index');
    Route::get('/add_user' , 'AllUserController@create');
    Route::post('/add_user' , 'AllUserController@store');
    Route::get('{id}/edit_user' , 'AllUserController@edit');
    Route::post('edit_user/{id}' , 'AllUserController@update');
    Route::get('{id}/delete_user' , 'AllUserController@destroy');

    // About Us Routes
    Route::get('about_us' , 'AboutController@index');
    Route::get('/add_about_us' , 'AboutController@create');
    Route::post('/add_about_us' , 'AboutController@store');
    Route::get('{id}/edit_about' , 'AboutController@edit');
    Route::post('edit_about/{id}' , 'AboutController@update');
    Route::get('{id}/delete_about' , 'AboutController@destroy');

    // Services Routes
    Route::get('services' , 'ServiceController@index');
    Route::get('/add_services' , 'ServiceController@create');
    Route::post('/add_services' , 'ServiceController@store');
    Route::get('{id}/edit_services' , 'ServiceController@edit');
    Route::post('edit_services/{id}' , 'ServiceController@update');
    Route::get('{id}/delete_services' , 'ServiceController@destroy');

    // Estimate Routes
    Route::get('estimate' , 'EstimateAppController@index');
    Route::get('/add_estimate' , 'EstimateAppController@create');
    Route::post('/add_estimate' , 'EstimateAppController@store');
    Route::get('{id}/edit_estimate' , 'EstimateAppController@edit');
    Route::post('edit_estimate/{id}' , 'EstimateAppController@update');
    Route::get('{id}/delete_estimate' , 'EstimateAppController@destroy');

    Route::get('all_user_estimate' , 'EstimateAppController@all_user_estimate');
    Route::get('{id}/delete_all_user_estimate' , 'EstimateAppController@all_user_estimate_destroy');

    // Team Routes
    Route::get('team' , 'TeamController@index');
    Route::get('/add_team' , 'TeamController@create');
    Route::post('/add_team' , 'TeamController@store');
    Route::get('{id}/edit_team' , 'TeamController@edit');
    Route::post('edit_team/{id}' , 'TeamController@update');
    Route::get('{id}/delete_team' , 'TeamController@destroy');

    // Partner Routes
    Route::get('partner' , 'PartnerController@index');
    Route::get('/add_partner' , 'PartnerController@create');
    Route::post('/add_partner' , 'PartnerController@store');
    Route::get('{id}/edit_partner' , 'PartnerController@edit');
    Route::post('edit_partner/{id}' , 'PartnerController@update');
    Route::get('{id}/delete_partner' , 'PartnerController@destroy');

    // Blog Routes
    Route::get('blog' , 'BlogController@index');
    Route::get('/add_blog' , 'BlogController@create');
    Route::post('/add_blog' , 'BlogController@store');
    Route::get('{id}/edit_blog' , 'BlogController@edit');
    Route::post('edit_blog/{id}' , 'BlogController@update');
    Route::get('{id}/delete_blog' , 'BlogController@destroy');

    // Slider Routes
    Route::get('slider' , 'SliderController@index');
    Route::get('/add_slider' , 'SliderController@create');
    Route::post('/add_slider' , 'SliderController@store');
    Route::get('{id}/edit_slider' , 'SliderController@edit');
    Route::post('edit_slider/{id}' , 'SliderController@update');
    Route::get('{id}/delete_slider' , 'SliderController@destroy');

    // Job Routes
    Route::get('job' , 'JobController@index');
    Route::get('/add_job' , 'JobController@create');
    Route::post('/add_job' , 'JobController@store');
    Route::get('{id}/edit_job' , 'JobController@edit');
    Route::post('edit_job/{id}' , 'JobController@update');
    Route::get('{id}/delete_job' , 'JobController@destroy');

    // Portfolio Routes
    Route::get('portfolio' , 'PortfolioController@index');
    Route::get('/add_portfolio' , 'PortfolioController@create');
    Route::post('/add_portfolio' , 'PortfolioController@store');
    Route::get('{id}/edit_portfolio' , 'PortfolioController@edit');
    Route::post('edit_portfolio/{id}' , 'PortfolioController@update');
    Route::get('{id}/delete_portfolio' , 'PortfolioController@destroy');

    // Setting Routes
    Route::get('setting' , 'SettingController@index');
    Route::get('/add_setting' , 'SettingController@create');
    Route::post('/add_setting' , 'SettingController@store');
    Route::get('{id}/edit_setting' , 'SettingController@edit');
    Route::post('edit_setting/{id}' , 'SettingController@update');
    Route::get('{id}/delete_setting' , 'SettingController@destroy');

    // Messages Routes
    Route::get('message' , 'ContactFormController@index');
    Route::post('message' , 'ContactFormController@store');
    Route::get('show_message/ar/{id}' , 'ContactFormController@show');
    Route::get('{id}/delete_message' , 'ContactFormController@destroy');

    // Apply Job Routes
    Route::get('apply_job' , 'ApplyJobController@index');
    Route::post('apply_job' , 'ApplyJobController@store');
    Route::get('show_apply_job/ar/{id}' , 'ApplyJobController@show');
    Route::get('{id}/delete_apply_job' , 'ApplyJobController@destroy');

    Route::post('login' , 'AuthorizedController@check_login');

});
    Route::get('admin/login', 'Admin\AuthorizedController@login');
    Route::get('not_authorized', 'Admin\AuthorizedController@not_authorized');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');


// Website Routes

Route::group(['namespace' => 'Site'] , function () {
    Route::get('/', 'SiteController@index');
    Route::get('about', 'SiteController@about');
    Route::get('blog', 'SiteController@blog');
    Route::get('jobs', 'SiteController@jobs');
    Route::get('blog/{id}', 'SiteController@blog_details');
    Route::get('job_details/{id}', 'SiteController@job_details');
    Route::get('services', 'SiteController@services');
    Route::get('portfolio', 'SiteController@portfolio');
    Route::get('contact', 'SiteController@contact');


    Route::get('estimate', 'EstimateController@index');
    Route::post('estimate', 'EstimateController@estimate');

});
