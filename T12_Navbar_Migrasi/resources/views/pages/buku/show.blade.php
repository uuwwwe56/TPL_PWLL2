@section('title', 'Dashboard')
@extends('layout.master')
@section('content')

    <h1 class="mt-3 text-white">Daftar Buku</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
    @endif
    <div class="card mt-2">
        <div class="">
            <a href="{{ route('create') }}" class="btn mx-3 my-3 btn-outline-primary">Tambah Produk</a>
        </div>
        <table class="table table-primary table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($data_buku as $item)
                    <tr>

                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->tahunterbit }}</td>
                        <td>{{ $item->harga }}</td>

                        <td>
                            <button type="button" class="btn btn-outline-danger btn-sm">Hapus</button>
                            <a href="{{ route('editbuku', ['id' => $item->id]) }}" class="btn btn-outline-warning btn-sm">
                                Edit
                            </a>
                            <a href="{{ route('detailbuku', ['id' => $item->id]) }}" class="btn btn-outline-info btn-sm">
                                Detail
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
