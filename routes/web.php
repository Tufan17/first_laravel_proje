<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\SetDeneme;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/page1', function () {
    return view('page_one');
});


Route::get('/phpTurkiye',[
    Ornek::class,'test' 
]);


Route::get('/phpDeneme',[
    Deneme::class,'deneme' 
]);

Route::get('/Merhaba{name}',[
    SetDeneme::class,'setName' 
]);

Route::get('/bak/{name}',[
    SetDeneme::class,'setDeneme' 
]);