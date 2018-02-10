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
    return view('finetutors.index');
});
Route::get('/tuitionboard', function () {
    return view('finetutors.tuitionboard');
});
Route::get('/browsetutor', function () {
    return view('finetutors.browsetutor');
});
Route::get('/aboutus', function () {
    return view('finetutors.aboutus');
});
Route::get('/privacypolicy', function () {
    return view('finetutors.privacypolicy');
});

Route::get('/tutorSignUp', function () {
    return view('finetutors.tutorSignUp');
});
Route::get('/signIn', function () {
    return view('finetutors.signin');
});
Route::get('/tutorhomepage', function () {
    return view('finetutors.tutorhomepage');
});
Route::get('/studenthomepage', function () {
    return view('finetutors.studenthomepage');
});
Route::get('/studentbrowsetutor', function () {
    return view('finetutors.studentbrowsetutor');
});
Route::get('/studentpost', function () {
    return view('finetutors.studentpost');
});
Route::get('/tutoractivity', function () {
    return view('finetutors.tutoractivity');
});
Route::get('/studentactivity', function () {
    return view('finetutors.studentactivity');
});
Route::get('/tutoredit', function () {
    return view('finetutors.tutoreditprofile');
});
Route::get('/studentedit', function () {
    return view('finetutors.studentedit');
});
Route::get('/studentsignup', function () {
    return view('finetutors.studentsignup');
});