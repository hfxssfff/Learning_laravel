<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
  //Demo页面
//    public function demo()
//    {
//      \View::addExtension('html', 'php');
//      return view('static_pages/html5up-story/index-demo');
//    }

    public function home()
    {
      return view('static_pages/home');
    }

    public function help()
    {
      return view('static_pages/help');
    }

    public  function about(){
      return view('static_pages/about');
    }
}
