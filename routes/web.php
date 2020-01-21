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

Route::get('/', 'frontend\JobavailableController@jobavailableindex')->name('/');
Route::post('/jobavailableajax', 'frontend\JobavailableController@jobavailableajax')->name('/jobavailableajax');
Route::get('insertjobavailable', 'frontend\JobavailableController@insertjobavailable')->name('insertjobavailable');
// function insert tbl_resume
Route::get('/resume', 'frontend\ResumeController@resumeindex')->name('resume');
Route::post('/insertdataresume', 'frontend\ResumeController@insertresume')->name('insertdataresume');
Route::post('/resume/fetch', 'frontend\ResumeController@fetch')->name('dropdown.fetch');
Route::post('/resume/fetchD', 'frontend\ResumeController@fetchD')->name('dropdown.fetchD');
// attachment
Route::get('/attachment', 'frontend\AttachmentController@attachmentindex')->name('attachment');
Route::post('/attachment/attachmentajax', 'frontend\AttachmentController@attachmentajax')->name('/attachment/attachmentajax');
Route::post('/uploadfile', 'frontend\AttachmentController@uploadFilePost')->name('uploadfile');
Route::get('/deletefile', 'frontend\AttachmentController@deletefile')->name('deletefile');
// Jobapplied
Route::get('/jobapplied', 'frontend\JobappliedController@jobapplied')->name('jobapplied');
Route::post('jobapplied/deletejobappliedajax', 'frontend\JobappliedController@deletejobappliedajax')->name('jobapplied/deletejobappliedajax');
Route::get('/jobapplieddelete', 'frontend\JobappliedController@jobapplieddelete')->name('jobapplieddelete');

// backend session
// addjobposition
Route::get('/addjobposition/user_id/123456', 'backend\AddjobpositionController@addjobpositionindex')->name('addjobposition/user_id/123456');
Route::post('/insertposition', 'backend\AddjobpositionController@insertposition')->name('insertposition');
Route::get('/jobposition', 'backend\AddjobpositionController@jobpositionindex')->name('jobposition');
Route::post('/jobposition/jobpositionajax', 'backend\AddjobpositionController@jobpositionajax')->name('jobposition/jobpositionajax');
Route::post('/jobposition/deletejobpositionajax', 'backend\AddjobpositionController@deletejobpositionajax')->name('jobposition/deletejobpositionajax');
Route::get('/deleteposition', 'backend\AddjobpositionController@deleteposition')->name('deleteposition');
Route::get('/changesposition', 'backend\AddjobpositionController@changesposition')->name('changesposition');
