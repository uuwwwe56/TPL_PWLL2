<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index(){
        $data=Buku::all();
        return view('buku.show',compact('data'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama'=>'required|min:5',
        ]);
        $buku=Buku::create([
            'nama'=> $request->name,
        ]);

        return redirect()->route('buku.show')->with('success','berhasil ditambahkan');
    }

    public function show(string $id){
        $buku=Buku::findOrFail($id);
        return view('buku.detail',compact('buku'));
    }

    

}
