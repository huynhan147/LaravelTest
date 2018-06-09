<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use App\Notifications\CreateUserMail;
use App\User;
class RegistrationController extends Controller
{
    //
    public function create(){
        return view('registration.create');
    }
    public function store( RegistrationForm $form){
        $user = User::create(request(['name','password','email','role']));
        auth()->login($user);
        $user->notify(new CreateUserMail());
        session()->flash('message','Thank You Registration');
        return redirect()->home();
    }
}
