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

Route::get('/', function () {
    return view('apps.index');
});

Route::get('/jobapplied', function () {
    return view('apps.jobapplied');
});

// function insert tbl_resume
Route::get('/resume', 'apps\ResumeController@resumeindex')->name('resume');
Route::post('/insertdataresume', 'apps\ResumeController@insertresume')->name('insertdataresume');
Route::post('/resume/fetch', 'apps\ResumeController@fetch')->name('dropdown.fetch');
Route::post('/resume/fetchD', 'apps\ResumeController@fetchD')->name('dropdown.fetchD');
