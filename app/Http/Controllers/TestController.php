<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    //  public function _construct(){
    //     $this->middleware('auth.login')->except('bar');
    // }
   
    public function foo(){
        
        return view('test.foo');
    }

    public function bar(){
        return view('test.bar');

    }

public function ajout(){
    return view('test.produit');
}

}
