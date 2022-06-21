<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Food;
use App\Models\User;
use App\Models\Admin;
use App\Models\Drink;
use App\Models\Galeri;
use App\Models\Gambar;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        DB::statement("SET SQL_MODE=''");
        $even =  DB::table('events')->latest('id')->paginate(5);
        $contacts  =  DB::table('users')->latest('id')->paginate(5);
        $makanan =  DB::table('food')->latest('id')->paginate(5);
        $cake =  DB::table('cake')->latest('id')->paginate(5);
        $drink =  DB::table('drink')->latest('id')->paginate(5);
        $pesan  =DB::table('feedback')->latest('id')->paginate(5);
        $menu = Gambar::select("*", DB::raw('count(id) as pa1'))->groupBy('created_at')->get();
        $menu2 = DB::table('gambar')->latest('id')->paginate(5);
        $galeri =  DB::table('galeri')->latest('id')->paginate(5);
         return view('contact.admin')->with([ 'even'=>$even,'galeri'=>$galeri,'drink'=>$drink,'menu'=>$menu,'contacts' => $contacts, 'pesan'=>$pesan,'cake'=>$cake,'makanan'=>$makanan,'menu2'=>$menu2]);
       
        //return view('contact.admin')->with('contacts', $contacts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect('contact')->with('flash_message', 'Contact Addedd!'); 
    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Admin::find($id);
        return view('contact.show')->with('contacts', $contact);
    }
    public function showg($id){
        $galeri = Galeri::find($id);
        return view('contact.showg')->with('galeri', $galeri);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Admin::find($id);
        return view('contact.edit')->with('contacts', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Admin::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Data User  Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect('contact')->with('flash_message', 'Data ini akan dihapus?');  
    }
}
