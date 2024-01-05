<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){

       return view('home');

    }

    public function about(){

        return view('about');
    }
    public function books(){



        return view('books');
    }
   public function library(){


      return view('library');
   }
   public function contact(){


    return view('contact');
 }


}
