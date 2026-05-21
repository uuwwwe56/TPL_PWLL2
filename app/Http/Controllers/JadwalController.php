<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data['jadwal'] = Jadwal::with(['matakuliah', 'dosen'])->get();
        return view('pages.jadwal.index', $data);
    }

    public function create()
    {
        $data['matakuliah'] = Matakuliah::all();
        $data['dosen'] = Dosen::all();

        return view('pages.jadwal.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nidn' => 'required',
            'kelas' => 'required',
            'hari' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'jam' => 'required|date_format:H:i',
        ]);

        Jadwal::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nidn' => $request->nidn,
            'kelas' => $request->kelas,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        return redirect()->route('jadwal')->with('success', 'Data berhasil disimpan');
    }
}