@section('title', 'Dashboard')
@extends('layout.master')
@section('content')

    <div class="container mt-3">
        <h1>Form</h1>
        <div class="card-header">Detail Data Buku</div>
        <div class="card-body">
           <p>Judu Buku : {{ $detailBuku->judul }}</p>
           <p>Penulis : {{ $detailBuku->penulis }}</p>
           <p>Tahun Terbit : {{ $detailBuku->tahunterbit }}</p>
           <p>Harga : {{ $detailBuku->harga }}</p>
        </div>
    </div>
@endsection
