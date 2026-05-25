<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PendudukImport;

class ImportController extends Controller
{
    public function index()
    {
        return view('keluarga.import');
    }
}