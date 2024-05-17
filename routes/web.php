<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('home.index');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::get('/', [AdminController::class, 'home']);

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/create_room', [AdminController::class, 'create_room']);

Route::post('/add_room', [AdminController::class, 'add_room']);

Route::get('/view_room', [AdminController::class, 'view_room']);

Route::get('/room_delete/{id}', [AdminController::class, 'room_delete']);

Route::get('/room_update/{id}', [AdminController::class, 'room_update']);

Route::post('/edit_room/{id}', [AdminController::class, 'edit_room']);

Route::get('/room_details/{id}', [HomeController::class, 'room_details']);

Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);

Route::get('/bookings', [AdminController::class, 'bookings']);

Route::get('/book_delete/{id}', [AdminController::class, 'book_delete']);

Route::get('/approve_book/{id}', [AdminController::class, 'approve_book']);

Route::get('/rejected_book/{id}', [AdminController::class, 'rejected_book']);

Route::get('print_pdf', [AdminController::class, 'print_pdf']);

Route::get('view_gallary', [AdminController::class, 'view_gallary']);

Route::post('upload_gallary', [AdminController::class, 'upload_gallary']);

Route::get('gallary_delete/{id}', [AdminController::class, 'gallary_delete']);

Route::post('contact', [HomeController::class, 'contact']);

Route::get('contact_nav', [HomeController::class, 'contact_nav']);

Route::get('all_messages', [AdminController::class, 'all_messages']);

Route::get('send_mail/{id}', [AdminController::class, 'send_mail']);

Route::post('mail/{id}', [AdminController::class, 'mail']);
