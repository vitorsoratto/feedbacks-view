<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feedbacks', [FeedbackController::class, 'feedbacks'])->name('feedbacks');
