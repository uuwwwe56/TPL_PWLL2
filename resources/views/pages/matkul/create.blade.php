@extends('layouts.template')


@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Tambah Data Matakuliah</h3>

    <form action="{{ route('matkul.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah" class="form-control" >
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Matakuliah</label>
            <input type="text" name="nama_matakuliah" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">SKS</label>
            <input type="number" name="sks" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ url('/matkul') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection