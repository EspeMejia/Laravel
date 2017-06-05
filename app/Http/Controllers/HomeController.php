<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(Auth::user()->doctor){ //medico
            return view('homedoctor');
        } elseif (Auth::user()->secretaria){  //secretaria
            return view('homesecretaria');
        }else{
            return view('home');
       }
    }
}
