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

Route::get('/tutorSignUp', function () {
    return view('finetutors.tutorSignUp');
});
Route::get('/signIn', function () {
    return view('finetutors.signin');
});
Route::get('/tutorhomepage', function () {
    return view('finetutors.tutorhomepage');
});

Route::get('/tutoractivity', function () {
    return view('finetutors.tutoractivity');
});
