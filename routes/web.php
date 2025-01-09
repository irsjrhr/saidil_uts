<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Medis;




Route::get('/', [ Medis::class, 'index' ]);
Route::post('/tambah', [ Medis::class, 'tambah' ]);
Route::get('/hapus', [ Medis::class, 'hapus' ]);
Route::post('/update', [ Medis::class, 'update' ]);



