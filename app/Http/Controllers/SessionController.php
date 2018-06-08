<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Login;

class SessionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }


    public function create(){
        return view('session.create');

    }
    public function store(Login $request){
        if(! auth()->attempt(request(['email','password'])))
        {
            return back()->withErrors([
                'message' => 'Sai tài khoản hoặc mật khẩu'
            ]);
        }
        return redirect()->home();
    }
    public function destroy(){
        auth()->logout();
        return redirect()->home();
    }
}
