<?php

use App\Http\Controllers\VoterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});