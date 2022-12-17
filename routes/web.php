<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();
Route::get('/add-new-ticket', function () {
    return view('addnewticket');
});




//Route::post('/add-user-admin', [App\Http\Controllers\UserController::class, 'addAdmin'])->name('adduseradmin');

Route::get('/add-user-admin/{id}', [App\Http\Controllers\UserController::class], 'addAdmin')->name('getAdmins');

Route::post('/addnewticket', [App\Http\Controllers\TicketController::class, 'store'])->name('addnewticket');

Route::get('/update-ticket-status/{id}', [App\Http\Controllers\OrderController::class, 'aproveTicket'])->name('updateStatus');
Route::post('/update-ticket-status/{id}', [App\Http\Controllers\OrderController::class, 'aproveTicket'])->name('updateStatuss');

Route::get('/cancel-ticket/{id}', [App\Http\Controllers\OrderController::class, 'cancelTicket'])->name('cancelP');
Route::post('/cancel-ticket/{id}', [App\Http\Controllers\OrderController::class, 'cancelTicket'])->name('cancelG');



Route::get('/home', [App\Http\Controllers\TicketController::class, 'index'])->name('listofAvailableTickets');
Route::post('/tickets/{id}', [App\Http\Controllers\TicketController::class, 'update'])->name('updateticket');
Route::get('/tickets/{id}', [App\Http\Controllers\TicketController::class, 'getTicket'])->name('getTicket');



Route::post('/add-new-order/{id}', [App\Http\Controllers\OrderController::class, 'create'])->name('addneworder');
Route::get('/add-new-order/{id}', function ($id) {
    return view('addneworder', ["id" => $id]);
});



Route::get('/list-of-orders/{userid}', [App\Http\Controllers\OrderController::class, 'index'])->name('listoforders');

Route::get('/list-of-ticktes', function () {
    return view('listofTicktes');
});
