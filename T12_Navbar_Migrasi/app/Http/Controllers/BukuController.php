<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // CARA 1 Query builder
        // $data_buku=DB::table('buku')->get();
        // dd($data);
        // return view('pages.buku.show',compact('data_buku'));

        // CARA 2 ORM
        $data_buku = Buku::all();
        // dd($dataBuku);

        return view('pages.buku.show', compact('data_buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->judul);
        $validated = $request->validate(
            [
                'judul' => 'required|min:5',
                'penulis' => 'required|min:5',
                'tahunterbit' => 'required|numeric',
                'harga' => 'required|numeric',
            ],
            [
                'judul.required' => 'judul buku jan kosong',
                'judul.min' => 'judul min. 5 char',
                'penulis.required' => 'penulis gabole kosong',
                'penulis.min' => 'isi  nama lengkap',
            ]
        );
        
        $validated['kode_buku'] = 1;

        Buku::create($validated);
        return redirect()->route('buku')->with('success', 'Data buku baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        // QUERY
        // $detailBuku = DB::table('buku')->where('id',$id)->firstOrFail();
        // dd($detailBuku);

        // orm
        $detailBuku = Buku::findOrFail($id);
        return view('pages.buku.detail-buku',compact('detailBuku'));
        // dd($detailBuku);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $detailBuku = Buku::findOrFail($id);
        return view('pages.buku.create', compact('detailBuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->judul);
        $validated = $request->validate(
            [
                'judul' => 'required|min:5',
                'penulis' => 'required|min:5',
                'tahunterbit' => 'required|numeric',
                'harga' => 'required|numeric',
            ],
            [
                'judul.required' => 'judul buku jan kosong',
                'judul.min' => 'judul min. 5 char',
                'penulis.required' => 'penulis gabole kosong',
                'penulis.min' => 'isi  nama lengkap',
            ]
        );

        Buku::where('id', $id)->update($validated);
        return redirect()->route('buku')->with('success', 'Data buku  berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::destroy($id);

        return redirect()->route('buku')
            ->with('success', 'Data buku berhasil dihapus');
    }
}
