<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to Laravel'];
        $pdf = PDF::loadView('japanese', $data);
        $pdf->setPaper('A4', 'portrait');


        return $pdf->stream('test.pdf');
    }
}
