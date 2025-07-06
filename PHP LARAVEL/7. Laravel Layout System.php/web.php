<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Poscontroller;                   

Route::get('/old-url',[poscontroller::class, 'old']);

Route::get('/new-something-url',[poscontroller::class, 'newurl'])->name('new_url');

Route::get('/index',[poscontroller::class, 'index']);

Route::get('/detail',[poscontroller::class, 'detail']);

                                  
?>                          

