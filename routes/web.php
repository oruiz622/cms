<?php

use App\Http\Controllers\Blog\PostsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/blog/posts/{post}', [PostsController::class, 'show'])->name('blog.show');
Route::get('/blog/categories/{category}', [PostsController::class, 'category'])->name('blog.category');
Route::get('/blog/tags/{tag}', [PostsController::class, 'tag'])->name('blog.tag');
Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('categories', 'CategoriesController');
    Route::resource('tags', 'TagsController');
    Route::resource('posts', 'PostsController');
    Route::get('trashed-posts', 'PostsController@trashed')->name('trashed-posts.index');
    Route::put('restore-post/{post}', 'PostsController@restore')->name('restore-posts');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');
    Route::put('users/profile', 'UsersController@update')->name('users.update-profile');
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
    Route::post('users/{user}/revoke-admin', 'UsersController@revokeAdmin')->name('users.revoke-admin');
});
