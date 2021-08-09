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


Route::get('/login', function (){
    return view('login');
});
Route::get('/register', function ()
{
    return view('register');
});
Route::post('/loginAct', 'loginController@action')->name('login');
Route::post('/registerAct', 'registerController@action')->name('register');
Route::get('/',function ()
{
    return view('welcome');
})->name('home');
Route::get('/kategori','categoryController@index')->name('kategori');
Route::post('/kategori/add','categoryController@add')->name('add_kategori');
Route::get('/kategori/form',function ()
{
    return view('tambah_kategori');
});
Route::get('/transaksi','transactionController@index')->name('transaksi');
Route::get('/transaksi/form','transactionController@addForm')->name('form_transaksi');
Route::post('/transaksi/add','transactionController@add')->name('add_transaksi');
