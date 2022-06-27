<?php

namespace App\Http\Controllers\Podcasts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    public function index(){
        return view('podcasts.index');
    }
}
