<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return response()->json([
        'message' => 'Hello, World!'
    ]);
});


Route::get('/teste/{id}', function ($id) {
    return response()->json([
        'message' => 'Welcome!! ' . $id . '!!'
    ]);
});
