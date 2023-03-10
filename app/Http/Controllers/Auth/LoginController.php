<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
       $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
 
        // validate the request 
        $this->validate($request , [
            'email'=>'required|email',
            'password'=>'required',
        ]);

         // sign the user id
         if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid Login Details');
         }

         //redirect
         return redirect()->route('dashboard');

    }
}
