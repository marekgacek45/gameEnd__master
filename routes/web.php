<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminTagsController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminVideoController;
use App\Http\Controllers\AdminCategoryController;

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





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//NOWE

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/posty', [PagesController::class, 'posts'])->name('posts');
Route::get('posty/{post:slug}',[PagesController::class,'post'])->name('post.show');




Route::get('/admin', [AdminPostsController::class, 'index'])->name('admin.index');
Route::get('/admin/nowyPost', [AdminPostsController::class, 'create'])->name('admin.create');
Route::post('/admin/nowyPost', [AdminPostsController::class, 'store'])->name('store');
Route::get('/{post:slug}', [AdminPostsController::class, 'show'])->name('admin.show');
Route::get('/{post:slug}/edytuj', [AdminPostsController::class, 'edit'])->name('admin.edit');
Route::patch('/{post:slug}', [AdminPostsController::class, 'update'])->name('admin.update');
Route::delete('/{post:slug}', [AdminPostsController::class, 'destroy'])->name('admin.destroy');
//zmienic nazwe 
Route::post('/admin/nowyPost/upload', [AdminPostsController::class, 'upload'])->name('ckeditor.upload');



Route::get('/admin/video', [AdminVideoController::class, 'index'])->name('admin.video.index');
Route::get('/admin/video/stwórz', [AdminVideoController::class, 'create'])->name('admin.video.create');
Route::post('/admin/video/stwórz', [AdminVideoController::class, 'store'])->name('admin.video.store');
Route::patch('/admin/video/{video:slug}', [AdminVideoController::class, 'update'])->name('admin.video.update');
Route::get('/admin/video/{video:slug}/edytuj', [AdminVideoController::class, 'edit'])->name('admin.video.edit');
Route::delete('/admin/video/{video:slug}', [AdminVideoController::class, 'destroy'])->name('admin.video.destroy');

Route::get('/admin/kategorie', [AdminCategoryController::class, 'index'])->name('admin.category.index');
Route::post('/admin/kategorie/dodaj', [AdminCategoryController::class, 'store'])->name('admin.category.store');
Route::delete('/admin/kategorie/{category:id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');


Route::get('/admin/tagi', [AdminTagsController::class, 'index'])->name('admin.tag.index');