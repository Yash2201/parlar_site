<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ServicesController;

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

Route::get('/', [TestimonialsController::class, 'show'])->name('testimonials.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    // Profile Related Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Testimonials Related Routes
    Route::get('/testimonials', [TestimonialsController::class, 'create'])->name('testimonials.create');
    Route::post('/save_testimonials', [TestimonialsController::class, 'store'])->name('testimonials.save_testimonials');
    Route::get('/testimonials_list', [TestimonialsController::class, 'index'])->name('testimonials.testimonials_list');
    Route::get('/testimonials/edit/{testimonial}', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
    Route::put('/testimonials/{testimonial}', [TestimonialsController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/delete/{testimonials}', [TestimonialsController::class, 'destroy'])->name('testimonials.delete');
    
    // Services Related Routes
    Route::get('/services', [ServicesController::class, 'create'])->name('services.create');
    Route::post('/services_save', [ServicesController::class, 'store'])->name('services.services_save');
    Route::get('/services_list', [ServicesController::class, 'index'])->name('services.services_list');
    Route::get('/services/edit/{services}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('/services/{services}', [ServicesController::class, 'update'])->name('services.update');
    Route::delete('/services/delete/{services}', [ServicesController::class, 'destroy'])->name('services.delete');
    
});

require __DIR__.'/auth.php';
