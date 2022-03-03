<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function cat1(){
        return view('coba.product.marbel-edu-games');
    }

    public function cat2(){
        return view('coba.product.marbel-and-friends-kids-games');
    }

    public function cat3(){
        return view('coba.product.riri-story-books');
    }

    public function cat4(){
        return view('coba.product.kolak-kids-songs');
    }
     public function product(){
        return view('coba.product');
    }
}
