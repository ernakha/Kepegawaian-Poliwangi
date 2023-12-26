<?php

namespace App\Http\Controllers;

use App\Models\Bukti;
use Illuminate\Http\Request;

class BuktiController extends Controller
{
    public function index(){
        $data['allDataBukti'] = Bukti::all();
        return view('backend.bukti.view_bukti', $data);
     }
  
     public function create(){
        return view('backend.bukti.add_bukti');
     }
  
     public function store(Request $request){
        $data = new Bukti();
        $data->kegiatan = $request->kegiatan;
        $data->nafile = $request->nafile;
        $data->keterangan = $request->keterangan;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('kepanitiaan.view');
     }
  
     public function edit($id){
        return view('backend.bukti.edit_bukti',);
     }
  
     public function update(Request $request, $id){
        $data = Bukti::find($id);
        $data->kegiatan = $request->kegiatan;
        $data->nafile = $request->nafile;
        $data->keterangan = $request->keterangan;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('kepanitiaan.view');
     }
  
     public function delete($id){
        $deleteData = Bukti::find($id);
        $deleteData->delete();
        return redirect()->route('bukti.view');
     }
}
