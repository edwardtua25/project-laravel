<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class BladeController extends Controller
{
   public function index(){
    $even = Events::all();
    return view('contact.admineven', compact('even'));
   }
   
}
