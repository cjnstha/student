<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:web')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:web')->group(function () {
    Route::get('/students', 'StudentsController@index');
    Route::match(['get', 'post'], '/add-students', 'StudentsController@addStudents');
    Route::get('/students/{students}', 'StudentsController@show')->name('student.detail');
    Route::get('/students/edit/{students}', 'StudentsController@edit')->name('student.edit');
    Route::post('/students/update/{students}', 'StudentsController@update')->name('student.update');
    Route::get('/students/delete/{students}', 'StudentsController@delete')->name('student.delete');
});



