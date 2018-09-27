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

Route::get('/','ProdukController@home' );
Route::resource('/order','InvoiceController' );

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('produk', function ()    {
        $data = [];
        return view('admin.produk',$data);
    })->name('produk');

    Route::resource('/produk','ProdukController' );

    Route::get('create','ProdukController@create');
    Route::post('create','ProdukController@store');
    Route::get('edit','ProdukController@edit');
   
    

    Route::get('about', function ()    {
        $data = [];
        return view('about',$data);
    })->name('about');

});

