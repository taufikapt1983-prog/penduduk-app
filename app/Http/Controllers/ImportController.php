<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PendudukImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('keluarga.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file_excel' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(
            new PendudukImport,
            $request->file('file_excel')
        );

        return back()->with(
            'success',
            'Import data berhasil'
        );
    }
}