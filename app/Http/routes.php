<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 Route::get('/', function () {
     return view('index');
 });

Route::group(['domain' => '{id}.myapp.local'], function () {
    Route::get('/', ['as' => '/', 'uses' => 'UsersController@test']);    
    
});



Route::get('/index', ['as' => 'index', 'uses' => 'UsersController@index']); 
Route::get('/photo', ['as' => 'index', 'uses' => 'UsersController@photo']); 
Route::get('/text', ['as' => 'index', 'uses' => 'UsersController@text']);    
Route::get('open/{userid}/{imageid}', ['uses' =>'ImgController@displayImg']);
Route::get('/trending', ['as' => 'trending', 'uses' => 'UsersController@tasks']);
Route::get('/catagories', ['as' => 'catagories', 'uses' => 'UsersController@chart']);
Route::get('verify/{userid}/{verifyid}', ['uses' =>'UsersController@verify']);
Route::post('handleComment/', ['as' => 'handleComment/', 'uses' => 'commentController@addComment']);

Route::get('/test_main', ['as' => 'index', 'uses' => 'UsersController@test_main']); 
Route::post('test', ['as' => 'test', 'uses' => 'UsersController@test']); 


Route::group(['middleware' => ['web']], function () {
    Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
    Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
    Route::get('/profile', ['middleware' => 'auth', 'as' => 'profile', 'uses' => 'UsersController@messages']); 
    Route::get('/subscription', ['middleware' => 'auth', 'as' => 'subscription', 'uses' => 'UsersController@ui']); 
    Route::get('/history', ['middleware' => 'auth', 'as' => 'history', 'uses' => 'UsersController@widgets']); 
    Route::get('/saved', ['middleware' => 'auth', 'as' => 'saved', 'uses' => 'UsersController@form']); 
    Route::get('/upload', ['middleware' => 'auth', 'as' => 'upload', 'uses' => 'ImgController@uploadImg']); 
    Route::get('/write', ['middleware' => 'auth', 'as' => 'write', 'uses' => 'ImgController@uploadText']); 
    Route::post('handleUpload', ['middleware' => 'auth', 'as' => 'handleUpload', 'uses' => 'ImgController@handleUpload']);
    Route::post('handleText', ['middleware' => 'auth', 'as' => 'handleText', 'uses' => 'ImgController@handleText']);
    //Route::get('/index', ['middleware' => 'auth', 'as' => 'index', 'uses' => 'UsersController@index']);    
    //Route::get('/calendar', ['middleware' => 'auth', 'as' => 'calendar', 'uses' => 'UsersController@calendar']); 
    //Route::get('/chart', ['middleware' => 'auth', 'as' => 'chart', 'uses' => 'UsersController@chart']); 
    //Route::get('/file-manager', ['middleware' => 'auth', 'as' => 'file-manager', 'uses' => 'UsersController@filemanager']); 
    Route::get('/form', ['middleware' => 'auth', 'as' => 'form', 'uses' => 'UsersController@form']); 
    //Route::get('/gallery', ['middleware' => 'auth', 'as' => 'gallery', 'uses' => 'UsersController@gallery']); 
    //Route::get('/icon', ['middleware' => 'auth', 'as' => 'icon', 'uses' => 'UsersController@icon']); 
    //Route::get('/messages', ['middleware' => 'auth', 'as' => 'messages', 'uses' => 'UsersController@messages']); 
    //Route::get('/add-users', ['middleware' => 'auth', 'as' => 'submenu', 'uses' => 'UsersController@addusers']); 
    //Route::get('/edit-users', ['middleware' => 'auth', 'as' => 'submenu2', 'uses' => 'UsersController@editusers']); 
    //Route::get('/delete-users', ['middleware' => 'auth', 'as' => 'submenu3', 'uses' => 'UsersController@deleteusers']); 
    //Route::get('/view', ['middleware' => 'auth', 'as' => 'submenu', 'uses' => 'UsersController@view']); 
    //Route::get('/add', ['middleware' => 'auth', 'as' => 'submenu2', 'uses' => 'UsersController@add']); 
    //Route::get('/delete', ['middleware' => 'auth', 'as' => 'submenu3', 'uses' => 'UsersController@delete']); 
    //Route::get('/table', ['middleware' => 'auth', 'as' => 'table', 'uses' => 'UsersController@table']); 
    //Route::get('/tasks', ['middleware' => 'auth', 'as' => 'tasks', 'uses' => 'UsersController@tasks']); 
    //Route::get('/typography', ['middleware' => 'auth', 'as' => 'typography', 'uses' => 'UsersController@typography']); 
    //Route::get('/ui', ['middleware' => 'auth', 'as' => 'ui', 'uses' => 'UsersController@ui']); 
    //Route::get('/projects', ['middleware' => 'auth', 'as' => 'ui', 'uses' => 'UsersController@projects']); 
    //Route::get('/widgets', ['middleware' => 'auth', 'as' => 'widgets', 'uses' => 'UsersController@widgets']); 
    //Route::get('/online-user', ['middleware' => 'auth', 'as' => 'widgets', 'uses' => 'UsersController@onlineuser']); 
    Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
    Route::resource('users', 'UsersController', ['only' => ['create', 'store']]);
});


