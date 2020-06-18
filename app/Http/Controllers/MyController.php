<?php

namespace App\Http\Controllers;

use App\User;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    public function importExportView()
    {
        return view('import');
    }
    public function export()
    {
        // dd("Export");
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        //     $users = User::all();
        //    dd($users);
        Excel::import(new UsersImport, request()->file('file'));

        return back();
    }
}
