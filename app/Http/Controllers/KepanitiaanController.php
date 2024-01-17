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
use Illuminate\Support\Facades\Auth;

class KepanitiaanController extends Controller
{
    public function index(){
         if(Auth::user()->id=='1'){
            $data = Kepanitiaan::all();
            $dataanggota = Anggota::all();
            return view('backend.kepanitiaan.view_kepanitiaan', ['data' => $data, 'dataanggota' => $dataanggota],);
      } else {
            $user = Auth::user()->id;
            $data = Anggota::where('user_id', $user)->get();
            return view('backend.kepanitiaan.view_kepanitiaan2', ['data' => $data]);
      }
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
         $dataNama -> user_id = $namas;
         $dataNama -> kepanitiaans_id = $data->id;
         $dataNama->save();
        }
        return redirect()->route('kepanitiaan.view');
     }
  
     public function edit($id){
        $editpanitia = Kepanitiaan::find($id);
        $editanggota = Anggota::find($id);
        return view('backend.kepanitiaan.edit_kepanitiaan', compact('editpanitia', 'editanggota'));
     }
  
   public function update(Request $request, $id){
      $data = Kepanitiaan::find($id);
      $data->kategori = $request->kategori;
        $data->terima = $request->terima;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->update();

      foreach ($request->nama  as $key => $namas) {
         $dataNama = new Anggota;
         $dataNama -> nama= $namas;
         $dataNama -> kepanitiaans_id = $data->id;
         $dataNama->update();
      }
      return redirect()->route('kepanitiaan.view');
   }

   public function editbukti($id){
      $databukti = Kepanitiaan::find($id);
      $datanama = Anggota::find($id);
      return view('backend.kepanitiaan.bukti_kepanitiaan', compact('databukti', 'datanama'));
   }

   public function updatebukti(Request $request, $id){
      $data = Kepanitiaan::find($id);
      $data->keterangan = $request->keterangan;
      $data->file = $request->file;
      $data->save();
      return redirect()->route('kepanitiaan.view');
   }

   public function delete($id){
      $deleteData = Kepanitiaan::find($id);
      $deleteData->delete();
      return redirect()->route('kepanitiaan.view');
   }
}
