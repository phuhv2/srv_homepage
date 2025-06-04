<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes(['register' => false]);

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'vi'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    App::setLocale($locale);
    return redirect()->back();
})->name('lang.switch');

// Authentication & Socialite
Route::get('user/login', [FrontendController::class, 'login'])->name('login.form');
Route::post('user/login', [FrontendController::class, 'loginSubmit'])->name('login.submit');
Route::get('user/logout', [FrontendController::class, 'logout'])->name('user.logout');

Route::get('user/register', [FrontendController::class, 'register'])->name('register.form');
Route::post('user/register', [FrontendController::class, 'registerSubmit'])->name('register.submit');

Route::get('password-reset', [FrontendController::class, 'showResetForm'])->name('password.reset');

Route::get('login/{provider}/', [LoginController::class, 'redirect'])->name('login.redirect');
Route::get('login/{provider}/callback/', [LoginController::class, 'Callback'])->name('login.callback');

// Frontend Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
Route::get('/recruitment', [FrontendController::class, 'recruitment'])->name('recruitment');
Route::post('/recruitment/message', [MessageController::class, 'store'])->name('recruitment.store');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

// Blog
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{slug}', [FrontendController::class, 'blogDetail'])->name('blog.detail');
Route::get('/blog/search', [FrontendController::class, 'blogSearch'])->name('blog.search');
Route::post('/blog/filter', [FrontendController::class, 'blogFilter'])->name('blog.filter');
Route::get('/blog-cat/{slug}', [FrontendController::class, 'blogByCategory'])->name('blog.category');
Route::get('/blog-tag/{slug}', [FrontendController::class, 'blogByTag'])->name('blog.tag');

// Backend Admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('post.index');
    })->name('admin');
    Route::get('/file-manager', function () {
        return view('backend.layouts.file-manager');
    })->name('file-manager');

    Route::resource('users', UsersController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('post-category', PostCategoryController::class);
    Route::resource('post-tag', PostTagController::class);
    Route::resource('post', PostController::class);
    Route::resource('message', MessageController::class);

    Route::get('/message/five', [MessageController::class, 'messageFive'])->name('messages.five');

    Route::get('/profile', [AdminController::class, 'profile'])->name('admin-profile');
    Route::post('/profile/{id}', [AdminController::class, 'profileUpdate'])->name('profile-update');

    Route::get('settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('setting/update', [AdminController::class, 'settingsUpdate'])->name('settings.update');

    Route::get('change-password', [AdminController::class, 'changePassword'])->name('change.password.form');
    Route::post('change-password', [AdminController::class, 'changPasswordStore'])->name('change.password');
});

// Laravel File Manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
