<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index(){
        $pro = Province::all();
        return view('admins.province',compact('pro'));

    }
    public function show($id){
        $pro = Province::find($id);
//        dd($pro->name);
        return view('admins.showpro',compact('pro'));
    }
    public function add(){
        return view('admins.addpro');
    }
   public function store(){
//        dd('x');
//       dd(request('name'));
        Province::create(request(['madv','cap','name']));
        return redirect('/admins/province');

   }

}
