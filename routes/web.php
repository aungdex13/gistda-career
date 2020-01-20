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

Route::get('/', 'apps\JobavailableController@jobavailableindex')->name('/');
Route::post('/jobavailableajax', 'apps\JobavailableController@jobavailableajax')->name('/jobavailableajax');
Route::get('insertjobavailable', 'apps\JobavailableController@insertjobavailable')->name('insertjobavailable');
// function insert tbl_resume
Route::get('/resume', 'apps\ResumeController@resumeindex')->name('resume');
Route::post('/insertdataresume', 'apps\ResumeController@insertresume')->name('insertdataresume');
Route::post('/resume/fetch', 'apps\ResumeController@fetch')->name('dropdown.fetch');
Route::post('/resume/fetchD', 'apps\ResumeController@fetchD')->name('dropdown.fetchD');
// attachment
Route::get('/attachment', 'apps\AttachmentController@attachmentindex')->name('attachment');
Route::post('/attachment/attachmentajax', 'apps\AttachmentController@attachmentajax')->name('/attachment/attachmentajax');
Route::post('/uploadfile', 'apps\AttachmentController@uploadFilePost')->name('uploadfile');
Route::get('/deletefile', 'apps\AttachmentController@deletefile')->name('deletefile');
// Jobapplied
Route::get('/jobapplied', 'apps\JobappliedController@jobapplied')->name('jobapplied');
Route::post('jobapplied/deletejobappliedajax', 'apps\JobappliedController@deletejobappliedajax')->name('jobapplied/deletejobappliedajax');
Route::get('/jobapplieddelete', 'apps\JobappliedController@jobapplieddelete')->name('jobapplieddelete');

// admin session
// addjobposition
Route::get('/addjobposition', 'admin\AddjobpositionController@addjobpositionindex')->name('addjobposition');
Route::post('/insertposition', 'admin\AddjobpositionController@insertposition')->name('insertposition');
Route::get('/jobposition', 'admin\AddjobpositionController@jobpositionindex')->name('jobposition');
Route::post('/jobposition/jobpositionajax', 'admin\AddjobpositionController@jobpositionajax')->name('jobposition/jobpositionajax');
Route::post('/jobposition/deletejobpositionajax', 'admin\AddjobpositionController@deletejobpositionajax')->name('jobposition/deletejobpositionajax');
Route::get('/deleteposition', 'admin\AddjobpositionController@deleteposition')->name('deleteposition');
Route::get('/changesposition', 'admin\AddjobpositionController@changesposition')->name('changesposition');
