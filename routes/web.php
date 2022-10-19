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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/keluar',function(){
    \Auth::logout();

    return redirect('login');
});
Route::group(['middleware'=>'auth'],function(){

    //ManageLayanan

   Route::get('/layanan','\App\Http\Controllers\Layanan_controller@index');

   Route::get('/layanan/add','\App\Http\Controllers\Layanan_controller@add');
   Route::post('/layanan/add','\App\Http\Controllers\Layanan_controller@store');
   Route::get('/layanan/{id}','\App\Http\Controllers\Layanan_controller@edit');
   Route::put('/layanan/{id}','\App\Http\Controllers\Layanan_controller@update');
   Route::delete('/layanan/{id}','\App\Http\Controllers\Layanan_controller@delete');
     
     //ManagePengajuan
   Route::get('/pengajuan','\App\Http\Controllers\Pengajuan_controller@index');
   Route::get('/pengajuan/add','\App\Http\Controllers\Pengajuan_controller@add');
   Route::post('/pengajuan/add','\App\Http\Controllers\Pengajuan_controller@store');
   Route::get('/pengajuan/{id}','\App\Http\Controllers\Pengajuan_controller@edit');
   Route::put('/pengajuan/{id}','\App\Http\Controllers\Pengajuan_controller@update');
   Route::delete('/pengajuan/{id}','\App\Http\Controllers\Pengajuan_controller@delete');
   Route::get('/pengajuan/status/{id}','\App\Http\Controllers\Pengajuan_controller@status');
   Route::get('pengajuan/add/kosong','\App\Http\Controllers\Pengajuan_controller@kosong');
   Route::get('pengajuan/add/ada','\App\Http\Controllers\Pengajuan_controller@kosong');
   Route::get('pengajuan/detail/{id}','\App\Http\Controllers\Pengajuan_controller@detail');

    //Penyetujuan 
   Route::get('setujui-pengajuan','\App\Http\Controllers\Setujui_controller@index');
   Route::get('setujui-pengajuan/{id}','\App\Http\Controllers\Setujui_controller@store');

   Route::get('setujui-pengajuan/setujui/{id}','\App\Http\Controllers\Setujui_controller@setujui');
   Route::get('setujui-pengajuan/tolak/{id}','\App\Http\Controllers\Setujui_controller@tolak');
   Route::get('setujui-pengajuan/detail/{id}','\App\Http\Controllers\Setujui_controller@detail');
   Route::get('setujui-pengajuan/edit/{id}','\App\Http\Controllers\Setujui_controller@edit');
   Route::put('setujui-pengajuan/edit/{id}','\App\Http\Controllers\Setujui_controller@update');
   Route::get('setujui-pengajuan/pdf/{id}','\App\Http\Controllers\Setujui_controller@pdf');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
