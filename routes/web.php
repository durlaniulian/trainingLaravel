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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test',function(){
//     return view ('test.dog');

// });

// Route::get('/users/{username}/{postid}',function($username,$postid){
//     echo $username.$postid;

// });
// Route::get('/',[
//     'as'=>'home',
//     'uses'=>'HomeController@index',
// ]);

Route::get('/',[
    'as'=>'home',
    'uses'=>'HomeController@index',
]);

Route::post('/mailing',[
    'as'=>'mailing.create',
    'uses'=>'MailingController@create',
]);