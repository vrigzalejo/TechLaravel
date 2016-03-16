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

Route::get( '/', function () {
    return View::make( 'index' );
} );

// API ROUTES ==================================
Route::group( array( 'prefix' => 'api' ), function () {

    Route::resource( 'register', '\TechTest\Repositories\Controllers\GuestRegistrationController',
        array( 'only' => array( 'index' ) ) );

    Route::post( 'register/store', '\TechTest\Repositories\Controllers\GuestRegistrationController@store' );

    Route::resource( 'countries', '\TechTest\Repositories\Controllers\CountryController',
        array( 'only' => array( 'index' ) ) );

} );
