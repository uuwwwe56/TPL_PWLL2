@section('title', 'Dashboard')
@extends('layout.master')
@section('content')

    <div class="container mt-3">
        <h1>Form</h1>
        <div class="card-header">Tambah Data Buku</div>
        <div class="card-body">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis" value="{{ old('pemulis') }}">
                     @error('judul')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahunterbit" value="{{ old('tahunterbit') }}">
                     @error('judul')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control" name="harga" value="{{ old('harga') }}">
                     @error('judul')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
