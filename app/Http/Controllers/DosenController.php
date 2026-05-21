<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dosen']=Dosen::all();
        return view('pages.dosen.index',$data);
    }

    // Form create
    public function create()
    {
        return view('pages.dosen.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nidn' => 'required|unique:dosen,nidn',
            'nama' => 'required'
        ]);

        // Simpan ke database
        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        // Redirect
        return redirect('/dosen')->with('success', 'Data dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
