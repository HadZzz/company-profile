<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
// Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/careers', [CareerController::class, 'index'])->name('careers');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');

// Services Routes
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Projects Routes
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Career Routes
Route::get('/careers/{vacancy}', [CareerController::class, 'show'])->name('careers.show');
Route::post('/careers/{vacancy}/apply', [CareerController::class, 'apply'])->name('careers.apply');

// Admin Routes (protected by auth middleware)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
