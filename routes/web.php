<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('install', 'App\Http\Controllers\HomeController@inslall')->name('home.install');

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::middleware(['admin'])->prefix('admin')->group(function () 
{
    Route::get('', 'App\Http\Controllers\Admin\AdminController@index')->name('admin.index');
    Route::get('/settings', 'App\Http\Controllers\Admin\AdminController@settings')->name('admin.settings');
    Route::patch('/settings-save', 'App\Http\Controllers\Admin\AdminController@settings_save')->name('admin.settings_save');
    Route::get('/about-ariff', 'App\Http\Controllers\Admin\AdminController@about_tariff')->name('admin.about_tariff');

    // Module Articles
    Route::prefix('articles')->group(function ()
    {
        Route::get('', 'App\Http\Controllers\Admin\Articles\ArticlesController@index')->name('admin.articles.index');

        Route::get('/create', 'App\Http\Controllers\Admin\Articles\ArticlesController@create')->name('admin.articles.create');
        Route::post('', 'App\Http\Controllers\Admin\Articles\ArticlesController@store')->name('admin.articles.store');

        Route::get('/{article}/edit', 'App\Http\Controllers\Admin\Articles\ArticlesController@edit')->name('admin.articles.edit');
        Route::patch('/{article}', 'App\Http\Controllers\Admin\Articles\ArticlesController@update')->name('admin.articles.update');

        Route::delete('/{article}/delete', 'App\Http\Controllers\Admin\Articles\ArticlesController@destroy')->name('admin.articles.delete');

        
        // Категории
        Route::prefix('categories')->group(function ()
        {
            Route::get('', 'App\Http\Controllers\Admin\Articles\CategoriesController@index')->name('admin.articles.categories.index');

            Route::get('/create', 'App\Http\Controllers\Admin\Articles\CategoriesController@create')->name('admin.articles.categories.create');
            Route::post('', 'App\Http\Controllers\Admin\Articles\CategoriesController@store')->name('admin.articles.categories.store');

            Route::get('/{category}/edit', 'App\Http\Controllers\Admin\Articles\CategoriesController@edit')->name('admin.articles.categories.edit');
            Route::patch('/{category}', 'App\Http\Controllers\Admin\Articles\CategoriesController@update')->name('admin.articles.categories.update');

            Route::delete('/{category}/delete', 'App\Http\Controllers\Admin\Articles\CategoriesController@destroy')->name('admin.articles.categories.delete');
        });

        // Теги
        Route::prefix('tags')->group(function ()
        {
            Route::get('', 'App\Http\Controllers\Admin\Articles\TagsController@index')->name('admin.articles.tags.index');

            Route::get('/create', 'App\Http\Controllers\Admin\Articles\TagsController@create')->name('admin.articles.tags.create');
            Route::post('', 'App\Http\Controllers\Admin\Articles\TagsController@store')->name('admin.articles.tags.store');

            Route::get('/{tag}/edit', 'App\Http\Controllers\Admin\Articles\TagsController@edit')->name('admin.articles.tags.edit');
            Route::patch('/{tag}', 'App\Http\Controllers\Admin\Articles\TagsController@update')->name('admin.articles.tags.update');

            Route::delete('/{tag}/delete', 'App\Http\Controllers\Admin\Articles\TagsController@destroy')->name('admin.articles.tag.delete');
        });
    });

    // Module Pages
    Route::prefix('pages')->group(function ()
    {
        Route::get('', 'App\Http\Controllers\Admin\Pages\PagesController@index')->name('admin.pages.index');

        Route::get('/create', 'App\Http\Controllers\Admin\Pages\PagesController@create')->name('admin.pages.create');
        Route::post('', 'App\Http\Controllers\Admin\Pages\PagesController@store')->name('admin.pages.store');

        Route::get('/{page}/edit', 'App\Http\Controllers\Admin\Pages\PagesController@edit')->name('admin.pages.edit');
        Route::patch('/{page}', 'App\Http\Controllers\Admin\Pages\PagesController@update')->name('admin.pages.update');

        Route::delete('/{page}/delete', 'App\Http\Controllers\Admin\Pages\PagesController@destroy')->name('admin.pages.delete');

        // Route::prefix('settings')->group(function ()
        // {
        //     Route::get('robots', 'App\Http\Controllers\admin\pages\PagesController@robots')->name('admin.pages.robots');
        // });
    });

    // Module Users
    Route::prefix('users')->group(function ()
    {
        Route::get('', 'App\Http\Controllers\Admin\Users\UsersController@index')->name('admin.users.index');

        Route::get('/create', 'App\Http\Controllers\Admin\Users\UsersController@create')->name('admin.users.create');
        Route::post('', 'App\Http\Controllers\Admin\Users\UsersController@store')->name('admin.users.store');

        Route::get('/{user}/edit', 'App\Http\Controllers\Admin\Users\UsersController@edit')->name('admin.users.edit');
        Route::patch('/{user}', 'App\Http\Controllers\Admin\Users\UsersController@update')->name('admin.users.update');

        Route::delete('/{user}/delete', 'App\Http\Controllers\Admin\Users\UsersController@destroy')->name('admin.users.delete');
    });

    // Module News
    Route::prefix('news')->group(function ()
    {
        Route::get('', 'App\Http\Controllers\Admin\News\NewsController@index')->name('admin.news.index');

        Route::get('/create', 'App\Http\Controllers\Admin\News\NewsController@create')->name('admin.news.create');
        Route::post('', 'App\Http\Controllers\Admin\News\NewsController@store')->name('admin.news.store');

        Route::get('/{news_item}/edit', 'App\Http\Controllers\Admin\News\NewsController@edit')->name('admin.news.edit');
        Route::patch('/{news_item}', 'App\Http\Controllers\Admin\News\NewsController@update')->name('admin.news.update');

        Route::delete('/{news_item}/delete', 'App\Http\Controllers\Admin\News\NewsController@destroy')->name('admin.news.delete');
    });

    // Module Feedback
    Route::prefix('feedback')->group(function ()
    {
        Route::prefix('forms')->group(function ()
        {
            Route::get('', 'App\Http\Controllers\Admin\Feedback\FormsController@index')->name('admin.feedback.forms.index');

            Route::get('/create', 'App\Http\Controllers\Admin\Feedback\FormsController@create')->name('admin.feedback.forms.create');
            Route::post('', 'App\Http\Controllers\Admin\Feedback\FormsController@store')->name('admin.feedback.forms.store');

            Route::get('/{feedback_form}/edit', 'App\Http\Controllers\Admin\Feedback\FormsController@edit')->name('admin.feedback.forms.edit');
            Route::patch('/{feedback_form}', 'App\Http\Controllers\Admin\Feedback\FormsController@update')->name('admin.feedback.forms.update');
        });

        Route::get('', 'App\Http\Controllers\Admin\Feedback\FeedbackController@index')->name('admin.feedback.index');
        Route::get('/{feedback}', 'App\Http\Controllers\Admin\Feedback\FeedbackController@views')->name('admin.feedback.views');

        Route::get('/{feedback}/edit', 'App\Http\Controllers\Admin\Feedback\FeedbackController@edit')->name('admin.feedback.edit');
        Route::patch('/{feedback}', 'App\Http\Controllers\Admin\Feedback\FeedbackController@update')->name('admin.feedback.update');

        Route::delete('/{feedback}/delete', 'App\Http\Controllers\Admin\Feedback\FeedbackController@destroy')->name('admin.feedback.delete');

    });
});

// Auth Admin
Route::get('/admin/login', 'App\Http\Controllers\Admin\AdminController@login')->name('admin.login');
Route::get('/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('auth.logout');

// URL SITE
Route::get('/{page}', 'App\Http\Controllers\PagesController@index')->name('home.pages.index');
Route::post('', 'App\Http\Controllers\HomeController@feedback')->name('home.feedback.store');

// Articles
Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create')->name('articles.create');

Route::post('/articles', 'App\Http\Controllers\ArticlesController@store')->name('articles.store');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit')->name('articles.edit');
Route::patch('/articles/{article}', 'App\Http\Controllers\ArticlesController@update')->name('articles.update');
Route::delete('/articles/{article}', 'App\Http\Controllers\ArticlesController@destroy')->name('articles.delete');

Auth::routes();
