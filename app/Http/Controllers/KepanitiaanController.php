<?php

namespace App\Http\Controllers;

use App\Models\Kepanitiaan;
use App\Models\Anggota;
use App\Models\Pegawai;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class KepanitiaanController extends Controller
{
    public function index(){
        $data['allDataKepanitiaan'] = Kepanitiaan::all();

        return view('backend.kepanitiaan.view_kepanitiaan', $data);
     }
  
     public function create(){
         $anggota = DB::table('users')->get();
        return view('backend.kepanitiaan.add_kepanitiaan', compact('anggota'));
     }
  
     public function store(Request $request){
        $data = new Kepanitiaan();
        $data->kategori = $request->kategori;
        $data->terima = $request->terima;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->save();

        foreach ($request->nama  as $key => $namas) {
         $dataNama = new Anggota;
         $dataNama -> nama = $namas;
         $dataNama -> kepanitiaans_id = $data->id;
         $dataNama->save();
        }
        return redirect()->route('kepanitiaan.view');
     }
  
     public function edit($id){
        $edit = Kepanitiaan::find($id);
        $edit = Anggota::find($id);
        return view('backend.kepanitiaan.edit_kepanitiaan', compact('edit'));
     }
  
     public function update(Request $request, $id){
         $data = Kepanitiaan::find($id);
      //   $data->namaAnggota = $request->anggota_id;
      //   $data->kategoriTugas = $request->kategori;
      //   $data->terima = $request->terima;
      //   $data->mulai = $request->mulai;
      //   $data->selesai = $request->selesai;
      //   $data->save();
      $data->kategori = $request->kategori;
        $data->terima = $request->terima;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->user_id = $request -> anggota;
        $data->save();

      //   foreach ($request->nama  as $key => $namas) {
      //    $dataNama = new Anggota;
      //    $dataNama -> nama= $namas;
      //    $dataNama -> kepanitiaans_id = $data->id;
      //    $dataNama->save();
      //   }
        return redirect()->route('kepanitiaan.view');
     }
  
     public function delete($id){
        $deleteData = Kepanitiaan::find($id);
        $deleteData->delete();
        return redirect()->route('kepanitiaan.view');
     }

     
}
