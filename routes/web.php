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

use App\Equestions;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/english/allQuestions', 'EnglishQuestionsController@index');

Route::get('/english/isCompleted','EnglishQuestionsController@isCompleted');

Route::get('english/single/{id}', [

    'uses' => 'EnglishQuestionsController@single',

    'as' => 'english.question'

]);

Route::post('english/single/check/{id}', [

    'uses' => 'EnglishQuestionsController@check',

    'as'=> 'question.check'

]);




//   $question =  Equestions::find(2);
//   $users = User::find(1);

//   $question->users()->attach(1);

//    foreach ($users->equestions as $equestion) {
//
//        echo $equestion->id;
//
//    }


//    foreach ($question->users as $user) {
//
//       echo $user->id;
//
//    }







//Route::get('/english/test', )