@section('title', 'Detail Buku')

@extends('layout.master')

@section('content')

    <div class="container mt-4">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Detail Data Buku</h4>
            </div>

            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th width="25%">Judul Buku</th>
                        <td>{{ $detailBuku->judul }}</td>
                    </tr>

                    <tr>
                        <th>Penulis</th>
                        <td>{{ $detailBuku->penulis }}</td>
                    </tr>

                    <tr>
                        <th>Tahun Terbit</th>
                        <td>{{ $detailBuku->tahunterbit }}</td>
                    </tr>

                    <tr>
                        <th>Harga</th>
                        <td>Rp {{ number_format($detailBuku->harga, 0, ',', '.') }}</td>
                    </tr>

                </table>

                <div class="mt-3">
                    <a href="{{ route('buku') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                    <a href="{{ route('editbuku', ['id' => $detailBuku->id]) }}"
                        class="btn btn-warning">
                        Edit
                    </a>
                </div>

            </div>

        </div>

    </div>

@endsection