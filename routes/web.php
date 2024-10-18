<?php

use App\Http\Controllers\weathercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [weathercontroller::class, 'index'])->name('index');