<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use exception;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = 'identities';

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        // $this->redirectTo = 'home';
        $this->middleware('guest')->except('logout');
    }

    // public function Login(Request $request){
    //     try {
    //         $this->validateLogin($request);
    //
    //         $users = \App\User::where('email', $request->input('email'))
    //                             ->get()
    //                             ->toArray();
    //
    //         if ($users[0]['type']==1) {
    //             $this->redirectTo = 'asd';
    //         }else{
    //             $this->redirectTo = 'qwe';
    //         }
    //
    //         if ($this->hasTooManyLoginAttempts($request)) {
    //             $this->fireLockoutEvent($request);
    //
    //             return $this->sendLockoutResponse($request);
    //         }
    //
    //         if ($this->attemptLogin($request)) {
    //             return $this->sendLoginResponse($request);
    //         }
    //
    //         $this->incrementLoginAttempts($request);
    //
    //         return $this->sendFailedLoginResponse($request);
    //
    //     } catch (\Exception $e) {
    //         echo ("Error load data " . $e->getMessage());
    //     }
    //
    // }

}
