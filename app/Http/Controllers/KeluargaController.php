<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;

class KeluargaController extends Controller
{
    public function index()
    {
        $keluargas = Keluarga::latest()->get();

        return view('keluarga.index', compact('keluargas'));
    }
	public function create()
{
    return view('keluarga.create');
}
public function store(Request $request)
{
	$request->validate([
    'no_kk' => 'required|digits:16|unique:keluargas,no_kk',
    'kepala_keluarga' => 'required',
	]);
    Keluarga::create([
        'no_kk' => $request->no_kk,
        'kepala_keluarga' => $request->kepala_keluarga,
        'alamat' => $request->alamat,
        'rt' => $request->rt,
        'rw' => $request->rw,
        'desa' => $request->desa,
        'kecamatan' => $request->kecamatan,
        'kabupaten' => $request->kabupaten,
    ]);

    return redirect('/keluarga');
}
public function show($id)
{
    $keluarga = Keluarga::findOrFail($id);

    $penduduks = $keluarga->penduduks;

    return view('keluarga.show', compact('keluarga', 'penduduks'));
}
public function edit($id)
{
    $keluarga = Keluarga::findOrFail($id);

    return view('keluarga.edit', compact('keluarga'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'no_kk' => 'required|digits:16|unique:keluargas,no_kk,' . $id,
        'kepala_keluarga' => 'required',
    ]);

    $keluarga = Keluarga::findOrFail($id);

    $keluarga->update([
        'no_kk' => $request->no_kk,
        'kepala_keluarga' => $request->kepala_keluarga,
        'alamat' => $request->alamat,
        'rt' => $request->rt,
        'rw' => $request->rw,
        'desa' => $request->desa,
        'kecamatan' => $request->kecamatan,
        'kabupaten' => $request->kabupaten,
    ]);

    return redirect('/keluarga');
}

public function delete($id)
{
    $keluarga = Keluarga::findOrFail($id);

    $keluarga->delete();

    return redirect('/keluarga');
}
}