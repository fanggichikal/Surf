<?php

use App\Http\Controllers\AdminCategoryIslandController;
use App\Http\Controllers\AdminCategoryLessonController;
use App\Http\Controllers\AdminContentManagementController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminSurfLessonController;
use App\Http\Controllers\AdminSurfTripController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SurfLessonController as FrontEndSurfLessonController;
use App\Http\Controllers\SurfTripsController as FrontEndSurftripController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.home');

    // Menggunakan showSection untuk halaman about, meneruskan 'about' sebagai sectionName
    Route::get('/about', 'showSection')->name('frontend.about')->defaults('sectionName', 'about');

    Route::get('/contact', 'contact')->name('frontend.contact');
    Route::get('/terms-conditions', 'termsconditions')->name('frontend.termsconditions');
    Route::get('/privacy-policy', 'privacypolicy')->name('frontend.privacypolicy');
});

// Route Surf Lesson
Route::prefix('surf-lessons')->group(function () {

    Route::get('/', [FrontEndSurfLessonController::class, 'index'])->name('surf-lessons.index');
    Route::get('/{slug}', [FrontEndSurfLessonController::class, 'show'])->name('surf-lessons.show');
});

// Route Surf Trips
Route::prefix('surf-trips')->group(function () {
    Route::get('/', [FrontEndSurftripController::class, 'index'])->name('surftrips.index');
    Route::get('/{slug}', [FrontEndSurftripController::class, 'show'])->name('surftrips.show');
    Route::get('/category/{slug}', [FrontEndSurftripController::class, 'byCategory'])->name('surftrips.byCategory');
});

// Route Review
// Route khusus frontend form review
Route::get('/review', [ReviewController::class, 'frontendCreate'])->name('frontend.reviewpage.create');
Route::post('/review', [ReviewController::class, 'frontendStore'])->name('frontend.reviewpage.store');



// BackEnd

//For Dashboar Admin 
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

// For Surf Lesson Admin
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('surflessons', AdminSurfLessonController::class);
});

// For Surf Trips Admin
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('surftrips', AdminSurfTripController::class);
});
// For Category Lesson Admin 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categorylessons', AdminCategoryLessonController::class);
});
// For Category Island Admin 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categoryislands', AdminCategoryIslandController::class);
});
// For Content Mangement Admin 
Route::prefix('admin')->name('admin.')->group(function () {
    // Tambahkan route ini jika belum ada
    Route::resource('contentmanagement', AdminContentManagementController::class);
});
// For Review Admin
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('reviews', ReviewController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
