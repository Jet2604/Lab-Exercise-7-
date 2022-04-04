<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\lab7Controller;

Route::get('/chapter/{$chapter_number}', [lab7Controller::class, 'readByChapter']);