<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');  //welcome donde solo dice laravel
});
// Route::get('/portfolio', function () {
//     return view('portfolio');   //la basica del video
// });

Route::get('/adminPJ', function () {
    return view('admin.index');   //el admin
});
Route::get('/adminO', function () {
    return view('dashboard');   //el admin original
});
Route::get('/adminPJ/portfolio', 'Admin\ProjectsController@index')->name('admin.portfolio.index'); # lista de articulos
Route::post('/adminPJ/portfolio/store', 'Admin\ProjectsController@store')->name('admin.portfolio.store');
Route::get('/adminPJ/portfolio/{projectId}/edit', 'Admin\ProjectsController@edit')->name('admin.portfolio.edit');
Route::post('/adminPJ/portfolio/{projectId}/update', 'Admin\ProjectsController@update')->name('admin.portfolio.update');
Route::delete('/adminPJ/portfolio/{projectId}/delete', 'Admin\ProjectsController@delete')->name('admin.portfolio.delete');
Route::get('/blog/post/{projectId}', 'Admin\ProjectsController@post')->name('post');
// Route::get('/blog/post/{projectId}', function () {
//         return view('post');    //la basica igual con posts
//     });
//     return view('admin.portfolio.index');   //el admin
// });
// Route::get('/blog', function () {
//     return view('blog');    //la basica igual con posts
// });
Route::get('/blogs', 'FrontendController@index')->name('index'); //donde esta lo de los primeros videos

Route::get('/home', function () {
    return view('home');    //home esta igual
});
Route::get('/articulos', function () {
    return view('articulos');   //blog articulos unpoco mas arruinado y lleno
});
Route::get('/encima', function () {
    return view('encima');   //blog articulos no esta funcionando
});