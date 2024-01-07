<?php

namespace App\Http\Controllers;

use App\Models\Anggdin;
use App\Models\Dinlur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DinlurController extends Controller
{
    public function index(){
        if(Auth::user()->id=='1'){
           $data = Dinlur::all();
           return view('backend.dinlur.view_dinlur', ['data' => $data]);
     } else {
           $user = Auth::user()->id;
           $data = Anggdin::where('user_id', $user)->get();
           return view('backend.dinlur.view_dinlur2', ['data' => $data]);
     }
    }
 
    public function create(){
        $anggdin = DB::table('users')->get();
       return view('backend.dinlur.add_dinlur', compact('anggdin'));
    }
 
    public function store(Request $request){
       $data = new Dinlur();
       $data->tempat = $request->tempat;
       $data->kategori = $request->kategori;
       $data->terima = $request->terima;
       $data->mulai = $request->mulai;
       $data->selesai = $request->selesai;
       $data->save();

       foreach ($request->nama  as $key => $namas) {
        $dataNama = new Anggdin;
        $dataNama -> user_id = $namas;
        $dataNama -> dinlurs_id = $data->id;
        $dataNama->save();
       }
       return redirect()->route('dinlur.view');
    }
 
    public function edit($id){
       $edit = Dinlur::find($id);
       $edit = Anggdin::find($id);
       return view('backend.dinlur.edit_dinlur', compact('edit'));
    }
 
    public function update(Request $request, $id){
        $data = Dinlur::find($id);
     //   $data->namaAnggota = $request->anggota_id;
     //   $data->kategoriTugas = $request->kategori;
     //   $data->terima = $request->terima;
     //   $data->mulai = $request->mulai;
     //   $data->selesai = $request->selesai;
     //   $data->save();
       $data->tempat = $request->tempat;
       $data->kategori = $request->kategori;
       $data->terima = $request->terima;
       $data->mulai = $request->mulai;
       $data->selesai = $request->selesai;
       $data->update();

       foreach ($request->nama  as $key => $namas) {
        $dataNama = new Anggdin;
        $dataNama -> nama= $namas;
        $dataNama -> kepanitiaans_id = $data->id;
        $dataNama->update();
       }
       return redirect()->route('kepanitiaan.view');
    }
 
    public function delete($id){
       $deleteData = Dinlur::find($id);
       $deleteData->delete();
       return redirect()->route('kepanitiaan.view');
    }
}
