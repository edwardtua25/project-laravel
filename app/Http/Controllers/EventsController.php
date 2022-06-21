<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function addeven(){
        return view("contact.createeven");
    }

    public function prosesaddeven(Request $request){
        // $request->file('gambar')->store('post-gambar');
        // Gambar::create($request->all());
        
        // return redirect()->intended('contact')->with("flash_message", "Menu berhasil Ditambahkan");

        $request->validate([
            'nama' => ['required','max:8000','unique:events,nama'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'deskripsi' => 'required',
        ]);
        
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/even';

        $file->move($tujuanFile,$namafile);

        $newMobil = new Events();
        $newMobil->nama = $request->nama;
        $newMobil->gambar = $namafile;
        $newMobil->deskripsi = $request->deskripsi;
         $newMobil->waktu = $request->waktu;
        $newMobil->save();
        return redirect('contact')->with('status', 'Menu berhasil di tambahkan');
    }

    public function editeven($id){
        $even = Events::find($id);

        return view('contact.editeven',compact('even'));
    }

    public function prosesediteven(Request $request, $id){
       $even =Events::find($id);
       $even ->update($request->all());

       return redirect()->intended('contact')->with("flash_message", "Menu berhasil Diubah");
    }
    public function deleteeven($id)
    {
        Events::destroy($id);
        return redirect('contact')->with('flash_message', 'Data ini akan dihapus?');  
    }
}
