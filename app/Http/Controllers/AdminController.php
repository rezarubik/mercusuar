<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    return view('template/admin');
   }

   public function pembangkit(){
       return view('menu/pembangkit');
   }
}
