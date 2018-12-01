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

Route::get('/','PagesController@about');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts', 'PostsController');



$router->group (
    ['prefix' => 'patient'],
    function () use ($router) {
        $router->get('/', 'PatientController@getPatients')->name('getPatients');
        $router->get('/{transaction_id}/transactions', 'PatientController@getTransactions')->name('seeTransaction');
        $router->delete('/{patient_id}', 'PatientController@deletePatient')->name('deletePatient');
    }
);

$router->group (
    ['prefix' => 'transactions'],
    function () use ($router) {
        $router->get('/', 'TransactionController@index')->name('getTransactions');
        $router->get('/{transaction_id}', 'TransactionController@getTransaction')->name('getTransaction');
    }
);
//Route::get('/','PagesController@index');
/*Route::get('/about', function () {
    return view('pages.about');
});*/