<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('home.index');
});

Route::get("/",[HomeController::class,'index'])->name('home');

Route::get("/home",[HomeController::class,'index'])->name('homepage');
Route::get("/aboutus",[HomeController::class,'aboutus'])->name('aboutus');
Route::get("/faq",[HomeController::class,'faq'])->name('faq');
Route::get("/references",[HomeController::class,'references'])->name('references');
Route::get("/contact",[HomeController::class,'contact'])->name('contact');
Route::post("/sendmessage",[HomeController::class,'sendmessage'])->name('sendmessage');
Route::get("/blog/{id}/{slug}",[HomeController::class,'blog'])->name('blog');
Route::get("/categoryblogs/{id}/{slug}",[HomeController::class,'categoryblogs'])->name('categoryblogs');
Route::get("/gotoblog/{id}",[HomeController::class,'gotoblog'])->name('gotoblog');
Route::post("/getblog",[HomeController::class,'getblog'])->name('getblog');
Route::get("/bloglist/{search}",[HomeController::class,'bloglist'])->name('bloglist');

// Route::get("/gotoblog/{id}",[HomeController::class,'gotoblog'])->whereNumber('id')->name('gotoblog');

/* Admin Routes */
Route::get("/admin",[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('auth');
Route::get("/admin/login",[HomeController::class,'login'])->name('admin_login');
Route::post("/admin/logincheck",[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get("/logout",[HomeController::class,'logout'])->name('logout');

/* User Routes */ 
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[\App\Http\Controllers\UserController::class,'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'destroymyreview'])->name('user_review_delete');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function(){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('userprofile');
});


/* Admin - Category Route */

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

    Route::get('/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('/category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('/category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('/category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    /* Blog Routes */

    Route::prefix('blog')->group(function(){    
    Route::get('/',[\App\Http\Controllers\Admin\BlogController::class,'index'])->name('admin_blogs');
    Route::get('/create',[\App\Http\Controllers\Admin\BlogController::class,'create'])->name('admin_blog_add');
    Route::post('/store',[\App\Http\Controllers\Admin\BlogController::class,'store'])->name('admin_blog_store');
    Route::get('/edit/{id}',[\App\Http\Controllers\Admin\BlogController::class,'edit'])->name('admin_blog_edit');
    Route::post('/update/{id}',[\App\Http\Controllers\Admin\BlogController::class,'update'])->name('admin_blog_update');
    Route::get('/delete/{id}',[\App\Http\Controllers\Admin\BlogController::class,'destroy'])->name('admin_blog_delete');
    Route::get('/show',[\App\Http\Controllers\Admin\BlogController::class,'show'])->name('admin_blog_show');
    });

    /*Images Routes */

    Route::prefix('image')->group(function(){    
    Route::get('/create/{blog_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
    Route::post('/store/{blog_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
    Route::get('/delete/{id}/{blog_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
    Route::get('/show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    /*Review Routes */

    Route::prefix('review')->group(function(){    
    Route::get('/',[\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('admin_review');
    Route::post('/update/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'update'])->name('admin_review_update');
    Route::get('/delete/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'destroy'])->name('admin_review_delete');
    Route::get('/show/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'show'])->name('admin_review_show');
    });

    /* Setting */ 
    Route::get('/setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('/setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

     /* Message Routes */

     Route::prefix('messages')->group(function(){    
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('/edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('/update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('/delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('/show',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
        });
    
    /* FAQ Routes */

    Route::prefix('faq')->group(function(){    
        Route::get('/',[\App\Http\Controllers\Admin\FaqController::class,'index'])->name('admin_faq');
        Route::get('/create',[\App\Http\Controllers\Admin\FaqController::class,'create'])->name('admin_faq_add');
        Route::post('/store',[\App\Http\Controllers\Admin\FaqController::class,'store'])->name('admin_faq_store');
        Route::get('/edit/{id}',[\App\Http\Controllers\Admin\FaqController::class,'edit'])->name('admin_faq_edit');
        Route::post('/update/{id}',[\App\Http\Controllers\Admin\FaqController::class,'update'])->name('admin_faq_update');
        Route::get('/delete/{id}',[\App\Http\Controllers\Admin\FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get('/show',[\App\Http\Controllers\Admin\FaqController::class,'show'])->name('admin_faq_show');
        });

});


