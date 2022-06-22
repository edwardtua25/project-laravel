<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index(){

    DB::statement("SET SQL_MODE=''");
    $menu =  DB::table('gambar')->latest('id')->paginate(1);
    $even =  DB::table('events')->latest('id')->paginate(10);
    return view('artikel')->with(['menu'=>$menu,'even'=>$even]);

    }
}
