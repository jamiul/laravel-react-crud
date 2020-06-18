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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('generate-pdf','PDFController@generatePDF');

Route::get('importExportView', 'MyController@importExportView');
Route::get('export', 'MyController@export')->name('export');
Route::post('import', 'MyController@import')->name('import');

Route::get('images', 'ImageUploadController@index');
Route::post('images', 'ImageUploadController@store')->name('images.store');

Route::get('images-import', 'ImageImportController@index');
Route::get('image-export', 'ImageImportController@export')->name('image.export');
Route::post('image-import', 'ImageImportController@import')->name('image.import');