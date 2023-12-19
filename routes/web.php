<?php

use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Help;

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});


Route::get('/', [HelpdeskController::class, 'index'])->name('index');
Route::get('/tickets', [HelpdeskController::class, 'tickets']);
Route::get('/tickets/ajax', [HelpdeskController::class, 'ticketsAjax'])->name('tickets.ajax');
Route::get('/abrirticket', [HelpdeskController::class, 'abrirTicket']);

Route::post('/abrirticket', [HelpdeskController::class, 'ticketStore']);
Route::get('/ticket/{id}', [HelpdeskController::class, 'ticket']);