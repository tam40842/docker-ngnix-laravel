<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;


Route::prefix('api')->group(function () {
    Route::resource('users', PhotoController::class);
});
