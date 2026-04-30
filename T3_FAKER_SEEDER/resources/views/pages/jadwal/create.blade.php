@extends('layouts.template')

@section('content')
    <div class="container mt-5">
        <h3 class="mb-4">Tambah Data Jadwal</h3>

        <form action="{{ route('jadwal.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Matakuliah</label>
                <select name="kode_matakuliah" class="form-control" required>
                    <option value="">-- Pilih Matakuliah --</option>
                    @foreach ($matakuliah as $mk)
                        <option value="{{ $mk->kode_matakuliah }}">
                            {{ $mk->kode_matakuliah }} - {{ $mk->nama_matakuliah }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Dosen</label>
                <select name="nidn" class="form-control" required>
                    <option value="">-- Pilih Dosen --</option>
                    @foreach ($dosen as $d)
                        <option value="{{ $d->nidn }}">
                            {{ $d->nidn }} - {{ $d->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Hari</label>
                <select name="hari" class="form-control" required>
                    <option value="">-- Pilih Hari --</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Jam</label>
                <input type="time" name="jam" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('jadwal') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
