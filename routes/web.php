<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

Route::get('/',[TicketController::class,'index']);
Route::get('/event',[EventController::class,'index'])->name('event');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/event/show', function () {
    return view('event.show');
});
Route::get('/ticket/pay', function () {
    return view('ticket.pay');
});
Route::get('/ticket/success', function () {
    return view('ticket.success');
});
