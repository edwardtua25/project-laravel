<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminGaleriController extends Controller
{
    public function index(){
        $galeri =  DB::table('galeri')->latest('id')->paginate(5);
        return view('contact.admingaleri')->with(['galeri'=>$galeri]);
    }
    public function index01(){
        return view('contact.admingaleri');
    }
}
