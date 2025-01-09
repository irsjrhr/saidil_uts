<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Medis;
use App\Http\Controllers\Login;
use App\Http\Controllers\Coba;




Route::get('/', [ Medis::class, 'index' ]);
Route::post('/tambah', [ Medis::class, 'tambah' ]);
Route::get('/hapus', [ Medis::class, 'hapus' ]);
Route::post('/update', [ Medis::class, 'update' ]);

Route::get('/login', [ Login::class, 'index' ]);
Route::get('/logout', [ Login::class, 'logout' ]);
Route::post('/login_auth', [ Login::class, 'auth' ]);


Route::get('/coba1', [ Coba::class, 'index']);
Route::get('/coba2', [ Coba::class, 'index2']);






