@extends('layouts.template')
@section('content')
    <div class="container mt-5">
        <h3>Tambah Mahasiswa</h3>

        <form action="{{ route('mhs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Dosen</label>
                <select name="nidn" class="form-control">
                    @foreach ($dosen as $d)
                        <option value="{{ $d->nidn }}">{{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>
            <input type="text" name="npm" class="form-control mb-2" placeholder="NPM">
            <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
            <button class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
