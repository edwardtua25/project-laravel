<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    
    public function index2(){
        return view('register');
    }
    public function store(Request $request )
    {
      $validateData = $request->validate([
           'name' => 'required|max:255',
           'username'=>['required', 'min:5', 'max:17','unique:users'],
            // 'nomor' =>'required|unique:users',
           'email' => 'required|email|unique:users',
           'password' =>'required|min:5|max:10'
        
          
       ]);
    $validateData['password'] = Hash::make($validateData['password']);

    User::create($validateData);

  
    return redirect('/login')->with('success',"Registrasi Behasil! Silahkan Login");
    


    //    $newUser = new User;
    //    $newUser ->name = $request->name;
    //   "v"
    //    $newUser->email = $request->email;
    //    $newUser->password=$request->password;
    // //    $newUser-> nomor = $request->nomor;

    //    $newUser->save();
    //    return redirect('/login')->with('message', 'Silahkan Login');
    }
}
