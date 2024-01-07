<?php

namespace App\Http\Controllers;

use App\Models\Bukti2;
use Illuminate\Http\Request;

class Bukti2Controller extends Controller
{
    public function index(){
        $data['allDataBukti2'] = Bukti2::all();
        return view('backend.bukti2.view_bukti2', $data);
     }
  
     public function create(){
        return view('backend.bukti2.add_bukti2');
     }
  
     public function store(Request $request){
        $data = new Bukti2();
        $data->kegiatan = $request->kegiatan;
        $data->nafile = $request->nafile;
        $data->keterangan = $request->keterangan;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('dinlur.view');
     }
  
     public function edit($id){
        return view('backend.bukti2.edit_bukti2',);
     }
  
     public function update(Request $request, $id){
        $data = Bukti2::find($id);
        $data->kegiatan = $request->kegiatan;
        $data->nafile = $request->nafile;
        $data->keterangan = $request->keterangan;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('dinlur.view');
     }
  
     public function delete($id){
        $deleteData = Bukti2::find($id);
        $deleteData->delete();
        return redirect()->route('bukti2.view');
     }
}
