<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AjaxController as ControllersAjaxController;

class RegisterController extends ControllersAjaxController
{
    /**
     * Display the registration view
     * @return \Illuminate\View\View
     */
    public function index(){
        return view('auth.register');

    }

}
