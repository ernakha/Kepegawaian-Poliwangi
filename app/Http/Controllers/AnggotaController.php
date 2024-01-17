<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kepanitiaan;
use App\Models\User;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function getData(Request $request)
    {
        $data = User::where('name', 'like', '%' . $request->searchItem .  '%');
        return $data->paginate(10, ['*'], 'page', $request->page);
    }

    public function editnilai($id)
    {
        $datakeg = Kepanitiaan::find($id);
        $datanama = Anggota::where('kepanitiaans_id', $id)->get();
        return view('backend.kepanitiaan.edit_nilai', compact('datakeg', 'datanama'));
    }
    
    public function tambahnilai($id)
    {
        $datanama = Anggota::find($id);
        return view('backend.kepanitiaan.add_nilai', compact('datanama'));
    }

    public function updatenilai(Request $request, $id)
    {
        $datanilai = Anggota::find($id);
        $datanilai->nilai = $request->nilai;
        $datanilai->update();
        return back();
    }

}
