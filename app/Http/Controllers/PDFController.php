<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF()
    {
        $users = User::get();
  
        $data = [
            'title' => 'Penugasan Pegawai',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);
     
        return $pdf->stream('Kepegawaian.pdf');
    }
}