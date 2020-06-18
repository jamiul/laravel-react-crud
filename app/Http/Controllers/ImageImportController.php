<?php

namespace App\Http\Controllers;

use App\Exports\ImagesExport;
use App\Imports\ImagesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImageImportController extends Controller
{
    public function index()
    {
        return view('image.import');
    }
    public function export()
    {
        // dd("Export");
        return Excel::download(new ImagesExport, 'images.xlsx');
    }
    public function import(Request $request)
    {
        dd($request->file('file')->getClientOriginalName());
        return $request->all();
        $array = Excel::toCollection(new ImagesImport, request()->file('file'));
        $array->getActiveSheet()->getDrawingCollection();
        return $array;

        return redirect()->back();
    }
}
