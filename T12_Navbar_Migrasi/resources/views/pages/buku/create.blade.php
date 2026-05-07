@extends('layout.master')

@section('title', isset($detailBuku) ? 'Edit Buku' : 'Tambah Buku')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                {{ isset($detailBuku) ? 'Edit Data Buku' : 'Tambah Data Buku' }}
            </h4>
        </div>

        <div class="card-body">

            <form action="{{ isset($detailBuku) ? route('update', ['id' => $detailBuku->id]) : route('store') }}"
                method="POST">

                @csrf

                @if(isset($detailBuku))
                    @method('PUT')
                @endif

                {{-- Judul Buku --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Judul Buku
                    </label>

                    <input type="text"
                        class="form-control @error('judul') is-invalid @enderror"
                        name="judul"
                        placeholder="Masukkan judul buku"
                        value="{{ old('judul', $detailBuku->judul ?? '') }}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Penulis --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Penulis
                    </label>

                    <input type="text"
                        class="form-control @error('penulis') is-invalid @enderror"
                        name="penulis"
                        placeholder="Masukkan nama penulis"
                        value="{{ old('penulis', $detailBuku->penulis ?? '') }}">

                    @error('penulis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Tahun Terbit --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Tahun Terbit
                    </label>

                    <input type="text"
                        class="form-control @error('tahunterbit') is-invalid @enderror"
                        name="tahunterbit"
                        placeholder="Contoh: 2024"
                        value="{{ old('tahunterbit', $detailBuku->tahunterbit ?? '') }}">

                    @error('tahunterbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Harga --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">
                        Harga
                    </label>

                    <input type="text"
                        class="form-control @error('harga') is-invalid @enderror"
                        name="harga"
                        placeholder="Masukkan harga buku"
                        value="{{ old('harga', $detailBuku->harga ?? '') }}">

                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        {{ isset($detailBuku) ? 'Update' : 'Simpan' }}
                    </button>

                    <a href="{{ route('buku') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection