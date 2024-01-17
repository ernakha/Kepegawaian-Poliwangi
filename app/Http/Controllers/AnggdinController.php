<?php

namespace App\Http\Controllers;

use App\Models\Anggdin;
use App\Models\Dinlur;
use App\Models\User;
use Illuminate\Http\Request;

class AnggdinController extends Controller
{
    public function getData(Request $request){
        $data = User::where('name', 'like', '%' . $request->searchItem .  '%');
        return $data->paginate(10, ['*'], 'page', $request->page);
    }
    
    public function editnilai($id)
    {
        $datakeg = Dinlur::find($id);
        $datanama = Anggdin::where('dinlurs_id', $id)->get();
        return view('backend.dinlur.edit_nilaidin', compact('datakeg', 'datanama'));
    }
    
    public function tambahnilai($id)
    {
        $datanama = Anggdin::find($id);
        return view('backend.dinlur.add_nilaidin', compact('datanama'));
    }

    public function updatenilai(Request $request, $id)
    {
        $datanilai = Anggdin::find($id);
        $datanilai->nilai = $request->nilai;
        $datanilai->update();
        return back();
    }
}
