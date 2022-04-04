<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lab7Controller extends Controller
{
    public function readAll()
    {
            //
    }

    public function readByChapter($chapter_number)
    {
            return view("lab7.chapter{$chapter_number}");
    }
}
