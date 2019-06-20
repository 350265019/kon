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

Route::get('/', function()
{
    return view('welcome');
});


Route::get('/test','admin\TestController@test');      //控制器@方法  这里必须要用  反斜杠 \  不然找不到
Route::any('/test/add/{name?}/{info?}/{status?}','admin\TestController@add');

//多请求
Route::match(['get', 'post'], '/admin/login', function()
{
    return 'login';
});


Route::any('/admin/register', function()
{
    return "register";
});

//路由传参
Route::get('/home/user/{id}', function($id)
{
    return 'user' . $id;
});

//多个参数
Route::get('/user/{id?}/{name?}', function($id = 10, $name = 'sora')
{
    return 'user:' . $id . "  name:" . $name;
});

//参数限制
Route::get('/username/{id?}/{name?}', function($id = 20 ,$name = 'paramLimit')
{
    return 'id:'.$id.' \t name:' . $name;
})->where(['name'=>'[0-9]*','name'=>'[A-Za-z]*']);
