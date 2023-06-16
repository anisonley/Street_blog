<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome.index');

Route::get ('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/', [ContactController::class, 'index'])->name('contact.index');

Route::get('/blog/single-blog-post', [BlogController::class, 'show'])->name('single-blog-post.show');

Route::get('/blog/create', [BlogController::class, 'create']) ->name('blog.create');

Route::get('/about', function(){
  return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
