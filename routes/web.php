<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogcategoryController;
use Illuminate\Support\Facades\Route;

//Public Controller
Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'public_index')->name('public_index');
    Route::get('/home', 'public_home')->name('public_home');
    Route::get('/dashboard', 'public_dashboard')->name('public_dashboard');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', 'blog_post')->name('blog_post');

});

//User Controller
// Route::middleware(['auth', 'IsUser'])->group(function () {
//     Route::controller(UserController::class)->group(function () {
//         Route::get('/admin/user/dashboard', 'user_dashboard')->name('user_dashboard');
//     });

// });

//Admin Controller
Route::middleware(['auth', 'IsAdmin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/admin/dashboard', 'admin_dashboard')->name('admin_dashboard');
        Route::get('/admin/admin/list', 'all_user_list')->name('all_user_list');
        Route::get('/admin/admin/add', 'add')->name('add');
        Route::post('/admin/admin/insert', 'insert')->name('insert');
        Route::get('/admin/admin/edit/{id}', 'edit')->name('edit');
        Route::post('/admin/admin/update/{id}', 'update')->name('update');
        Route::get('/admin/admin/delete/{id}', 'delete')->name('delete');
        Route::get('/admin/admin/user_profile', 'user_profile')->name('user_profile');
        Route::post('/admin/admin/user_profile/update', 'update_user_profile')->name('update_user_profile');
    });


    Route::controller(BlogcategoryController::class)->group(function () {
        Route::get('/admin/blog_category/list', 'list_blog_category')->name('list_blog_category');
        Route::get('/admin/blog_category/add', 'add_blog_category')->name('add_blog_category');
        Route::post('/admin/blog_category/insert', 'insert_blog_category')->name('insert_blog_category');
        Route::get('/admin/blog_category/edit/{id}', 'edit_blog_category')->name('edit_blog_category');
        Route::get('/admin/blog_category/update/{id}', 'update_blog_category')->name('update_blog_category');
        Route::get('/admin/blog_category/delete/{id}', 'delete_blog_category')->name('delete_blog_category');
    });
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog/list', 'list_blog')->name('list_blog');
        Route::get('/admin/blog/add', 'add_blog')->name('add_blog');
        Route::post('/admin/blog/insert', 'insert_blog')->name('insert_blog');
        Route::get('/admin/blog/edit/{id}', 'edit_blog')->name('edit_blog');
        Route::get('/admin/blog/update/{id}', 'update_blog')->name('update_blog');
        Route::get('/admin/blog/delete/{id}', 'delete_blog')->name('delete_blog');
    });
});





// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
