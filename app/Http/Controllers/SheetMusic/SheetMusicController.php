<?php

namespace App\Http\Controllers\SheetMusic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SheetMusicController extends Controller
{
    public function index(){
        return view('sheetmusic.index');
    }
}
