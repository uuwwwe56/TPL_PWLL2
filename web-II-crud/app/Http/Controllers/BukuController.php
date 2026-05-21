<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\DetailBuku;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->keyword;

        $dataBuku = Buku::with(['detail', 'kategori'])
            ->when($search, function ($query) use ($search) {

                $query->where(function ($q) use ($search) {

                    $q->where('judul', 'like', "%{$search}%")
                        ->orWhere('penulis', 'like', "%{$search}%")
                        ->orWhere('tahun_terbit', 'like', "%{$search}%")

                        ->orWhereHas('detail', function ($q2) use ($search) {
                            $q2->where('isbn', 'like', "%{$search}%");
                        })

                        ->orWhereHas('kategori', function ($q2) use ($search) {
                            $q2->where('nama_kategori', 'like', "%{$search}%");
                        });
                });
            })

            ->orderBy('id', 'desc')
            ->paginate(3)
            ->withQueryString();

        return view('pages.buku.daftar-buku', compact('dataBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('pages.buku.form-create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|min:5',
            'penulis' => 'required|min:5',
            'harga' => 'required|numeric',
            'tahun_terbit' => 'required|numeric',
            'kategori_id' => 'required',
            'isbn' => 'required',
            'jumlah_halaman' => 'required|numeric'
        ]);

        // simpan buku
        $buku = Buku::create([
            'judul' => $validated['judul'],
            'penulis' => $validated['penulis'],
            'harga' => $validated['harga'],
            'tahun_terbit' => $validated['tahun_terbit'],
            'kategori_id' => $validated['kategori_id'],
        ]);

        // simpan detail buku
        DetailBuku::updateOrCreate(
            ['buku_id' => $buku->id],
            [
                'isbn' => $validated['isbn'],
                'jumlah_halaman' => $validated['jumlah_halaman']
            ]
        );

        return redirect()->route('buku')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //query db builder
        //$detailBuku = DB::table('buku')->where('id', $id)->firstOrFail();

        //orm
        // $detailBuku = Buku::find($id);
        $detailBuku = Buku::findOrFail($id);

        return view('pages.buku.detail-buku', compact('detailBuku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailBuku = Buku::with('detail')->findOrFail($id);

        $kategori = Kategori::all();

        return view('pages.buku.form-create', compact('detailBuku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|min:5',
            'penulis' => 'required|min:5',
            'harga' => 'required|numeric',
            'tahun_terbit' => 'required|numeric',
            'kategori_id' => 'required',
            'isbn' => 'required',
            'jumlah_halaman' => 'required|numeric'
        ]);

        $buku = Buku::findOrFail($id);

        // update tabel buku
        $buku->update([
            'judul' => $validated['judul'],
            'penulis' => $validated['penulis'],
            'harga' => $validated['harga'],
            'tahun_terbit' => $validated['tahun_terbit'],
            'kategori_id' => $validated['kategori_id'],
        ]);

        // update tabel detail_buku
        DetailBuku::updateOrCreate(
            ['buku_id' => $buku->id],
            [
                'isbn' => $validated['isbn'],
                'jumlah_halaman' => $validated['jumlah_halaman']
            ]
        );

        return redirect()
            ->route('buku')
            ->with('success', 'Data buku berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailBuku = Buku::findOrFail($id);

        // hapus detail buku
        if ($detailBuku->detail) {
            $detailBuku->detail->delete();
        }

        // hapus buku
        $detailBuku->delete();

        return redirect()
            ->route('buku')
            ->with('success', 'Data buku berhasil dihapus!');
    }
}
