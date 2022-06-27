<?php

namespace App\Http\Controllers\Magazines;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagazinesController extends Controller
{
    public function index(){
        return view('magazines.index');
    }
}
