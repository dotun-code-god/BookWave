<?php

namespace App\Http\Controllers\AudioBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudioBooksController extends Controller
{
    public function index(){
        return view('audiobooks.index');
    }
}
