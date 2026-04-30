@extends('layouts.template')


@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Tambah Data Dosen</h3>

    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="nidn" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ url('/dosen') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection