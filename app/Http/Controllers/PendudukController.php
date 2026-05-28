<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Keluarga;

class PendudukController extends Controller
{
    public function index()
	{
    $penduduks = Penduduk::with('keluarga')->get();

    return view('penduduk.index', compact('penduduks'));
	}
	
	public function create($keluarga_id)
    {
        $keluarga = Keluarga::findOrFail($keluarga_id);

        return view('penduduk.create', compact('keluarga'));
    }

    public function store(Request $request)
    {
		$request->validate([
		'nik' => 'required|digits:16|unique:penduduks,nik',
		'nama' => 'required',
		]);
        Penduduk::create([
            'keluarga_id' => $request->keluarga_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'hubungan_keluarga' => $request->hubungan_keluarga,
        ]);

        return redirect('/keluarga/' . $request->keluarga_id);
    }

	public function edit($id)
	{
    $penduduk = Penduduk::with('keluarga')->findOrFail($id);

    return view('penduduk.edit', compact('penduduk'));
	}

	public function update(Request $request, $id)
	{
		$request->validate([
        'nik' => 'required|digits:16|unique:penduduks,nik,' . $id,
        'nama' => 'required',
		]);

		$penduduk = Penduduk::findOrFail($id);

		$penduduk->update([
        'nik' => $request->nik,
        'nama' => $request->nama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'hubungan_keluarga' => $request->hubungan_keluarga,
		]);

		return redirect('/penduduk')
		->with('success', 'Data berhasil diupdate');
	}
	
	public function delete($id)
	{
		$penduduk = Penduduk::findOrFail($id);

		$keluarga_id = $penduduk->keluarga_id;

		$penduduk->delete();

		return redirect('/penduduk')
		->with('success', 'Data berhasil dihapus');
	}
	public function search(Request $request)
	{
    $keyword = $request->keyword;

    $penduduks = Penduduk::with('keluarga')
        ->where('nik', 'like', "%$keyword%")
        ->orWhere('nama', 'like', "%$keyword%")
        ->limit(10)
        ->get();

    return response()->json($penduduks);
	}
}