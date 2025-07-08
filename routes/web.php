<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ReservationController;

Route::get('/', [CalendarController::class, 'index']);
Route::get('/horarios/{fecha}', [CalendarController::class, 'getSchedules']);
Route::post('/reservar', [ReservationController::class, 'store']);
Route::get('/resumen', [ReservationController::class, 'summary']);
Route::get('/historial', [ReservationController::class, 'history']);
