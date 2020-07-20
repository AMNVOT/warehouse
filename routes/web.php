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


Route::get('/','PagesController@products');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function (){
    return view('products');
});

Route::get('/household', function(){
    return view('pages.household');
});

Route::get('/industrial', function(){
    return view('pages.industrial');
});

//dynamic routes
/*
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user'.$name.'with an id of'.$id;
});
*/
