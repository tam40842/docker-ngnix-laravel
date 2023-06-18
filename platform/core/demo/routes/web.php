<?php

use Illuminate\Support\Facades\Route;

// Route::get('/demo', function () {
//     return view('botble-demo::index');
// });

Route::group(['namespace' => 'Botble\Demo\Http\Controllers'], function () {
    Route::get('/demo', 'DemoController@getIndex');
});
