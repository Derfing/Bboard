<?php

use App\Http\Controllers\BbsController;

Route::get('/', [BbsController::class, 'index']);
