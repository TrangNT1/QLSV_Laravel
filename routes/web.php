<?php

use Illuminate\Support\Facades\Route;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});
Route::get('/hello', function () {
    echo "welcome";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'sinhvien'], function () {
    Route::get('index', 'App\Http\Controllers\QlsvSinhVienController@index')->name('qlsv_sinhvien.index'); 
    Route::get('/create', 'App\Http\Controllers\QlsvSinhVienController@create')->name('qlsv_sinhvien.create');
    Route::post('/add', 'App\Http\Controllers\QlsvSinhVienController@store')->name('qlsv_sinhvien.add');
    Route::get('/edit/{id}', 'App\Http\Controllers\QlsvSinhVienController@edit')->name('qlsv_sinhvien.edit');
    Route::post('/update/{id}', 'App\Http\Controllers\QlsvSinhVienController@update')->name('qlsv_sinhvien.update');
    Route::get('/del/{id}', 'App\Http\Controllers\QlsvSinhVienController@destroy')->name('qlsv_sinhvien.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});