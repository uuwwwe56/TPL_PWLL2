@extends('layouts.template')
@section('content')
<div class="container mt-5">
    <h3>Tambah KRS</h3>

    <form action="{{ route('krs.store') }}" method="POST">
        @csrf

        <select name="npm" class="form-control mb-2">
            @foreach($mahasiswa as $m)
                <option value="{{ $m->npm }}">{{ $m->nama }}</option>
            @endforeach
        </select>

        <select name="kode_matakuliah" class="form-control mb-2">
            @foreach($matakuliah as $mk)
                <option value="{{ $mk->kode_matakuliah }}">
                    {{ $mk->nama_matakuliah }}
                </option>
            @endforeach
        </select>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection