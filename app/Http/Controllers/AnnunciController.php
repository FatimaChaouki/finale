<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnunciController extends Controller
{
  public function createAnnunci(){
    return view ('annunci.create');
  }
}
