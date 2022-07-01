<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEventController extends Controller
{
    public function index(){
    $even =  DB::table('events')->latest('id')->paginate(5);
    return view('contact.admineven')->with(['even'=>$even]);
    }
    public function index01(){
        return view('contact.admineven');
    }
}
