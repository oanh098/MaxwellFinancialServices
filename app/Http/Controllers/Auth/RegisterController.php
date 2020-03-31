<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\NewUserWelcomeMail;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new profiles as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect profiles after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'account_number' =>  ['string', 'max:255','nullable','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
         $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
//            'account_number' => $data['account_number'],
            'password' => Hash::make($data['password']),
        ]);

//        $user = new User();
//        $user['name'] = $data['name'];
//        $user['email']= $data['email'];
//        $user['password']= $data['password'];
//            $user->save();

//        Mail::to($data['email'])->send(new NewUserWelcomeMail($user));
        Mail::to($data['email'])->send(new NewUserWelcomeMail());
        return $user;
//        $id = $user['id'];
//        return '/holdings/'.$id;
//        return '/login';
//        return redirect()->back();
    }
}
