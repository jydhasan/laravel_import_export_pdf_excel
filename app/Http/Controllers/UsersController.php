<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
// use App
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;



class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function import( Request $request)
    {
        Excel::import(new UsersImport, $request->file('file'));
        return back();
    }


    public function generatePDF()
    {
        $pdf = Pdf::loadView('welcome');
        return $pdf->download('invoice.pdf');
    }

}
