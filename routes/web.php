<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PartnerController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\EventscommunicationsController;
use App\Http\Controllers\Frontend\FilmsController;
use App\Http\Controllers\Frontend\KolkataPhotosController;
use App\Http\Controllers\Frontend\KolkataStudioController;
use App\Http\Controllers\Frontend\WeddingController;
use App\Http\Controllers\Frontend\DigitalMarketingController;


use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PartnerApplicationController;
use App\Http\Controllers\Backend\ContactApplicationController;


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


Route::get('/', [HomeController::class, 'index']);

//partner
Route::get('/partner', [PartnerController::class, 'index']);
Route::post('/partner', [PartnerController::class, 'postpartner']);


//contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'postcontact']);


//about
Route::get('/about', [AboutController::class, 'index']);



Route::get('/asquare-events',[EventscommunicationsController::class, 'index']);
Route::get('/filmsentertaiment',[FilmsController::class, 'index']);
Route::get('/kolkataphotos',[KolkataPhotosController::class, 'index']);
Route::get('/kolkatastudios',[KolkataStudioController::class, 'index']);
Route::get('/asquare-wedding',[WeddingController::class, 'index']);
Route::get('/digital-marketing',[DigitalMarketingController::class, 'index']);


// Route::get('/dashboard', function () {
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/partnerapplication',[PartnerApplicationController::class,'index'])->middleware(['auth', 'verified'])->name('partnerapplication');
Route::get('/partnerapplication/{id}',[PartnerApplicationController::class,'show'])->middleware(['auth', 'verified'])->name('partnerapplication.show');



Route::get('/contactapplication',[ContactApplicationController::class,'index'])->middleware(['auth', 'verified'])->name('contactapplication');
Route::get('/contactapplication/{id}',[ContactApplicationController::class,'show'])->middleware(['auth', 'verified'])->name('contactapplication.show');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
