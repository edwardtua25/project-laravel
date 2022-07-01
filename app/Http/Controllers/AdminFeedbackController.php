<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminFeedbackController extends Controller
{
    public function index(){
    $pesan  =DB::table('feedback')->latest('id')->paginate(5);
    return view('contact.adminfeedback')->with(['pesan'=>$pesan]);
    }
    public function index01(){
        return view('contact.adminfeedback');
    }
}
