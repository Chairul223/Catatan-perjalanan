<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;
use App\Models\User;
use auth;

class CatatanController extends Controller
{
    //
     //
     public function index()
     {
        $user = auth()->id();
        $catatan = Catatan::where('id_user',$user)->orderBy('created_at','desc')->paginate(5);
        return view('catatan',['catatan'=> $catatan]);
     }

     public function cari(Request $request)
     {
        $user = auth()->id();
        $cari = $request->cari;
        $catatan = Catatan::where('id_user',$user)->where('tanggal',$cari)->orderBy('created_at','desc')->paginate(5);
        return view('catatan',['catatan'=> $catatan]);
     }

     public function tambah(){
        return view('catatan_tambah');
     }

     public function store(Request $request){
        $this -> validate($request,[
            'id_user' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required'
        ]);

        Catatan::create([
            'id_user' =>$request->id_user,
            'tanggal' =>$request->tanggal,
            'waktu' =>$request->waktu,
            'lokasi' =>$request->lokasi,
            'suhu' =>$request->suhu
        ]);
        return redirect('/catatan');
     }
}
