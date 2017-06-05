<?php

namespace App\Http\Controllers\Auth;

use App\admin;
use App\Doctor;
use App\secretaria;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home'; /**ahora mismo es un atributo estático*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    //public function
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    //$user = App\User::find(1);
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $user= User::create([
            'name' => $data['name'],
            'surname'=> $data['surname'],
            'email' => $data['email'],
            'dni'=> $data['dni'],
            'password' => bcrypt($data['password']),
        ]);
        if(isset($data['numcolegiado'])){ //medico

            $doctor = new Doctor($data);
            $doctor->user_id=$user->id;
            $doctor->save();

        } elseif(isset($data['address'])){   //secretaria

            $secretaria = new secretaria($data);
            $secretaria->user_id=$user->id;
            $secretaria->save();

        } elseif (isset($data['phone']) )   {  //admin
            $admin = new admin($data);
            $admin->user_id=$user->id;
            $admin->save();
        }
        return $user;
    }
}
