<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\concertController;
use App\Http\Controllers\PaymentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/displayConcert', [concertController::class, 'view'])->name('displayConcert');

Route::get('/viewConcertSection/{id}',[App\Http\Controllers\concertController::class,'viewConcertSection'])->name('viewConcertSection');

Route::get('/home', [concertController::class, 'home'])->name('home');

Route::get('/ticket', [concertController::class, 'ticket'])->name('ticket');

Route::get('/contactUs', [concertController::class, 'contactUs'])->name('contactUs');

Route::get('/addConcert', [concertController::class, 'addConcert'])->name('addConcert');

Route::post('/addConcert/store',[App\Http\Controllers\concertController::class,'add'])->name('addConcert');

Route::get('/payment', [concertController::class, 'payment'])->name('payment');

Route::get('/testing', [concertController::class, 'testing'])->name('testing');

Route::get('/concertSection', [concertController::class, 'viewConcertSection'])->name('concertSection');

Route::get('/concertSection/{id}',[concertController::class, 'viewConcertSection'])->name('concertSection');

Route::post('/checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');

Route::post('/hiddenTicket', [App\Http\Controllers\concertController::class, 'hiddenTicket'])->name('hiddenTicket');

Route::post('/submitPayment', [App\Http\Controllers\PaymentController::class, 'submitPayment'])->name('submitPayment');

Route::get('/success',[concertController::class, 'success'])->name('success');

Route::get('/success', [concertController::class, 'sendTicket'])->name('success');

Route::get('/print_pdf', [concertController::class, 'print_pdf'])->name('print_pdf');