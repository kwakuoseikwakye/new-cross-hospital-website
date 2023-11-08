<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
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
    return view('dashboard');
})->name('dashboard');

Route::get('check_appointment_time/{time}',[AppointmentController::class,"checkAppointmentTime"]);
Route::post('book_appointment',[AppointmentController::class,"bookAppointment"]);
Route::get('verify_payment/{code}/{transaction}',[AppointmentController::class,"verifyPayment"]);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::get('/sweet_sculpt', function () {
    return view('sweet');
});

Route::get('/appointment', function () {
    $services = DB::table("services")->get();
    return view('appointment',[
        "services" => $services
    ]);
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('submit-form', [ContactController::class, 'store']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
