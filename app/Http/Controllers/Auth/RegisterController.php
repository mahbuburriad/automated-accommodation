<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;



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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            
            //'photo' => 'required|string',
            //'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',

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
        return User::create([
            'name' => ucfirst($data['name']),
            'username' => $data['username'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'city' => $data['city'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        
            //'photo' => $data['photo'],
        ]);
    }
   /* public function store(Request $request)
    {
        $user = new file;

        $user->title = input::get('name');
        if(Input::hasFile('photo'))
            {
                $file=input::file('photo');
                $file->move(public_path(). '/', $file->getClientphoto();
                $postad->photo=$file->getClientphoto();
            }

            $postad->save();

    }*/
}
