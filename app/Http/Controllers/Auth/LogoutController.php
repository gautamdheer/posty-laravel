<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
public function store(){
     auth()->logout();
     Session::flush();
    return redirect()->route('home');
}
}
