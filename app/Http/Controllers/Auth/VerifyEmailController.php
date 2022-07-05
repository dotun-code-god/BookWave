<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * @param EmailVerificationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request){
        if($request->user()->hasVerifiedEmail()){
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }
        $request->fulfill();

        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
