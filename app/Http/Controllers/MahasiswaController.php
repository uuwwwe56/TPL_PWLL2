<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswa'] = Mahasiswa::all();
        return view('pages.mhs.index', $data);
    }

    public function create()
    {
        $data['dosen'] = Dosen::all(); // ✅ ambil data dosen
        return view('pages.mhs.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'npm' => 'required|unique:mahasiswa,npm',
            'nama' => 'required'
        ]);

        Mahasiswa::create([
            'npm' => $request->npm,
            'nama' => $request->nama,
            'nidn' => $request->nidn
        ]);

        return redirect()->route('mhs')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }
}