<?php

use App\Http\Controllers\ProductController;

Route::get('/animeList', [ProductController::class, 'index']);