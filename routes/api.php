<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::resource('notebook', \App\Http\Controllers\NotebookController::class);
