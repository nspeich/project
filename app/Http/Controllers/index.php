<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\index;

class Index extends Controller
{

      public function articles(){
        
        return view('test.grid');
    }

}
?>