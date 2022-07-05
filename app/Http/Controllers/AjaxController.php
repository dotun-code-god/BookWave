<?php

/**
 * A class containing logic for all ajax requests
 * @author Dotun Oyetunde
 * 
 * @package Laravel
 */

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;


class AjaxController extends Controller
{

     /**
     * Handle an incoming registration request
     * @param \Illuminate\Http\Request $request
     * @return 
     */
    public function registerUser(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:12|min:8',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|confirmed',
        ]);

        // redirect if validations are invalid
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        else{
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }
    }

    /**
     * @param \App\Http\Request\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function loginUser(LoginRequest $request){
        if (isset($request->validator) && $request->validator->fails()) {
            return response()->json($request->validator->messages(), 400);
        }
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended();
    }

    /**
     * Email Verification notification 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\RedirectResponse
     */

     public function verifyEmail(Request $request){
         if($request->user()->hasVerifiedEmail()){
             return redirect()->intended(RouteServiceProvider::HOME);
         }

         $request->user()->sendEmailVerificationNotification();

        return response()->json(['status', 'Verification Link Sent'], 200);
     }

}
