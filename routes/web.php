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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/services/petroleum-trading', 'App\Http\Controllers\PagesController@petroleum');
Route::get('/services/products-retailing', 'App\Http\Controllers\PagesController@retailing');
Route::get('/services/petroleum-marketing', 'App\Http\Controllers\PagesController@marketing');
Route::get('/services/logistics', 'App\Http\Controllers\PagesController@logistics');

Route::get('/services/additional-service', 'App\Http\Controllers\PagesController@additionalservice');


Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('blog/personalpost', 'App\Http\Controllers\PostController@personalpost')->name("peronal.post");
Route::resource('/blog', 'App\Http\Controllers\PostController');

Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');



Route::get('/blog/create', function() {
    return view('blog.create');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::group(['middleware' => ['admin']], function () {
//     Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//    })->name('dashboard');

// });


Route::resource('/categories', 'App\Http\Controllers\CategoryController');

route::get('blog/category/{category?}', 'App\Http\Controllers\PostController@cat_posts')->name('blog.index');

Route::post('ckeditor/image_upload', 'App\Http\Controllers\PostController@upload')->name('upload');

Route::get('/search','App\Http\Controllers\PostController@search'); 

Route::get('/contact','App\Http\Controllers\ContactController@index');

Route::post('/contactadd','App\Http\Controllers\ContactController@store');