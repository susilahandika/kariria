<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'type'     => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

       try {
            DB::beginTransaction();

            $register = User::create([
               'name'     => $data['name'],
               'email'    => $data['email'],
               'password' => bcrypt($data['password']),
               'type'     => $data['type'],
            ]);

            DB::table('identities')->insert([
               'email' => $data['email'],
               'name'  => $data['name'],
            ]);

            DB::table('educations')->insert([
               'email' => $data['email'],
            ]);

            DB::table('references')->insert([
               'email' => $data['email'],
            ]);

            DB::table('photos')->insert([
               'email' => $data['email'],
            ]);

            DB::commit();

            return $register;
       } catch (Exception $e) {
            DB::rollBack();
            echo ("Error load data " . $e->getMessage());
       }
    }
}
