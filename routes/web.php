<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing;

Route::get('/', [ Landing::class, 'index' ]);






