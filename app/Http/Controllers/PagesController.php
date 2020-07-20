<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function products(){
      return view('products');
  }

  public function household(){
      return view('pages.household');
  }

  public function industrial(){
      return view('pages.industrial');
  }

}
