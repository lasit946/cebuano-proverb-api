<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProverbController;

Route::get('/api/proverb/random', [ProverbController::class, 'random']);
