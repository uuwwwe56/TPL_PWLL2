<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $data['krs'] = Krs::with(['mahasiswa', 'matakuliah'])->get();
        return view('pages.krs.index', $data);
    }

    public function create()
    {
        $data['mahasiswa'] = Mahasiswa::all();
        $data['matakuliah'] = Matakuliah::all();

        return view('pages.krs.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'kode_matakuliah' => 'required'
        ]);

        Krs::create([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah
        ]);

        return redirect()->route('krs')
            ->with('success', 'Data KRS berhasil ditambahkan');
    }
}