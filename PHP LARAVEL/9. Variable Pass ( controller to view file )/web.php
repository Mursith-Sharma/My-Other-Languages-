<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Poscontroller;     
              
Route::get('/', function () {
     return view('welcome');
});

Route::get('/', [Poscontroller::class, 'index']);

Route::get('/index',[poscontroller::class, 'index']);

Route::get('/detail',[poscontroller::class, 'detail']);

                                  
?>                          

