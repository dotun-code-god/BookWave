<?php

namespace App\Http\Controllers\Snapshots;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SnapshotsController extends Controller
{
    public function index(){
        return view('snapshots.index');
    }
}
