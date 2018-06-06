<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MycvController extends Controller
{
    //
    public function index(){
        $data =  [
            'name'=>'Nguyen Phi Huy',
            'birth'=>'18-12-1997',
            'address'=>'Bac Giang',
            'school'=> 'PTIT'

        ];
        return view('mycv',compact('data'));
    }
}
