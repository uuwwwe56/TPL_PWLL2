@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

<div class="container mt-3">
    <h1>Form</h1>

    <div class="card">
        <div class="card-header">
            {{ isset($detailBuku) ? 'Edit' : 'Tambah' }} Data Buku
        </div>

        <div class="card-body">

            <form action="{{ isset($detailBuku) ? route('update', ['id' => $detailBuku->id]) : route('store') }}" method="POST">
                @csrf

                @if(isset($detailBuku))
                    @method('PUT')
                @endif

                {{-- Judul Buku --}}
                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul"
                        value="{{ old('judul', $detailBuku->judul ?? '') }}">

                    @error('judul')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Penulis --}}
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis"
                        value="{{ old('penulis', $detailBuku->penulis ?? '') }}">

                    @error('penulis')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tahun Terbit --}}
                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahunterbit"
                        value="{{ old('tahunterbit', $detailBuku->tahunterbit ?? '') }}">

                    @error('tahunterbit')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Harga --}}
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control" name="harga"
                        value="{{ old('harga', $detailBuku->harga ?? '') }}">

                    @error('harga')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>
</div>

@endsection