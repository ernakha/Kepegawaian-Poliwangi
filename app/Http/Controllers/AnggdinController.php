<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AnggdinController extends Controller
{
    public function getData(Request $request){
        $data = User::where('name', 'like', '%' . $request->searchItem .  '%');
        return $data->paginate(10, ['*'], 'page', $request->page);
    }
}
