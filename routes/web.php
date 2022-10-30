<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\PDF;
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

Route::get('/welcome',function()
{
    return view('welcome');
});

Route::get('/',[TicketController::class,'index'])->name('ticket');
Route::get('/ticket',[TicketController::class,'index'])->name('ticket');
Route::post('/ticket/create',[TicketController::class,'create'])->name('ticket.create');
Route::post('/ticket/update/{id}',[TicketController::class,'update'])->name('ticket.update');

Route::get('/event',[EventController::class,'index'])->name('event');
Route::get('/event/show/{id}',[EventController::class,'show'])->name('event.show');

Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/contact/create',[ContactController::class,'create'])->name('contact.create');

Route::get('/generate-pdf/{id}', [TicketController::class, 'generatePDF'])->name('generate-pdf');
Route::get('/sendMail/{id}', [TicketController::class, 'sendMail'])->name('sendMail');
