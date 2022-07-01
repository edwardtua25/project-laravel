<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    public function index(){
    $contacts  =  DB::table('users')->latest('id')->paginate(5);
    return view('contact.adminuser')->with(['contacts'=>$contacts]);
}

public function index01(){
    return view('contact.adminuser');
}
}
