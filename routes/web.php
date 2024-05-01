<?php

use App\Http\Controllers\UserInfoController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserInfoController::class, 'index']);

Route::resource('userInfo', UserInfoController::class)->withoutMiddleware(VerifyCsrfToken::class);;
