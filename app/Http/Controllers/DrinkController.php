<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function adddrink(){
        return view("contact.createdrink");
    }

    public function prosesadddrink(Request $request){
        // $request->file('gambar')->store('post-gambar');
        // Gambar::create($request->all());
        
        // return redirect()->intended('contact')->with("flash_message", "Menu berhasil Ditambahkan");

        $request->validate([
            'nama' => ['required','max:8000','unique:drink'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'harga' => 'required',
        ]);
        
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/drink';

        $file->move($tujuanFile,$namafile);

        $newMobil = new Drink;
        $newMobil->nama = $request->nama;
        $newMobil->gambar = $namafile;
        $newMobil->harga = $request->harga;
        $newMobil->save();
        return redirect('contact')->with('status', 'Menu berhasil di tambahkan');
    }

    public function editdrink($id){
        $drink = Drink::find($id);

        return view('contact.editdrink',compact('drink'));
    }

    public function proseseditdrink(Request $request, $id){
       $drink =Drink::find($id);
       $drink ->update($request->all());

       return redirect()->intended('contact')->with("flash_message", "Menu berhasil Diubah");
    }
    public function deletedrink($id)
    {
        Drink::destroy($id);
        return redirect('contact')->with('flash_message', 'Data ini akan dihapus?');  
    }
}
