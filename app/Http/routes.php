<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('list',[
        'doc'=>[
           
        ]
    ]);
});




Route::group(['namespace' => 'Cm'], function()
{

    Route::get('/cm', 'CmController@index');

});




Route::group(['namespace' => 'Doc'], function()
{

    Route::get('/doc/router', function () {
        return view('doc/routerlist');
    });

    Route::get('/doc/router/{id}', function ($id) {
        return view('doc/router', ['id' => $id]);
    });

    Route::get('/doc/hello', function () {
        return view('doc/hello', ['title' => 'Victoria']);
    });

    Route::get('/doc/welcome', 'UserController@welcome');

});


//Route::get('doc/router', ['as' => 'profile',function ($id) {
//    //
//}]);
//
//$url = route('profile', ['id' => 1]);


//Route::group(['namespace' => 'Doc','middleware' => 'User'], function()
//{
//    // Controllers Within The "App\Http\Controllers\Admin" Namespace
//    //Route::get('user/{id}', 'UserController@showProfile');
//    Route::get('doc/router/{id}', function ($id) {
//        return 'User '.$id;
//    });
//
//});













//Route::group(['middleware' => ['web']], function () {
//    //
//});

//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});

//Route::get('user/{id}', 'UserController@showProfile');
//
//Route::get('user/{id}', 'UserController@showProfile');

//restful
//Route::resource('photo', 'PhotoController');

//Route::resource('photo', 'PhotoController',
//    ['only' => ['index', 'show']]);




//Route::get('user/{id}/profile', ['as' => 'profile', function ($id) {
//    return route('profile', ['id' => $id]);
//}]);


//Route::get('admin/profile', ['middleware' => 'oldauth', function () {
//    //
//}]);


//Route::get('user/{name}', function ($name) {
//    return 'User Name :  '.$name;
//    //
//})
//    ->where('name', '[A-Za-z]+');











/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



//Route::group(['middleware' => ['web']], function () {
//    //
//});

/**
 * wd OK
 */

//Route::get('/doc', function () {
//    return view('doclist');
//});










Route::get('/list', function () {
    return view('list',[
        'doc'=>[
        ]
    ]);
});

Route::get('/errors', function () {
    return view('errors/503');
});

Route::get('/404', function () {
    //404自定义
    //resources/views/errors/404.blade.php
    abort(404, 'Unauthorized action.');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/docdemo', function () {
    return view('docdemo');
});

