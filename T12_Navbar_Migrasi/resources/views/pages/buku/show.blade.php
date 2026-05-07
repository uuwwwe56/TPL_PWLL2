@section('title', 'Dashboard')

@extends('layout.master')

@section('content')

    <h1 class="mt-3 text-white">Daftar Buku</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card mt-2">

        <div>
            <a href="{{ route('create') }}" class="btn btn-outline-primary mx-3 my-3">
                Tambah Produk
            </a>
        </div>

        <table class="table table-primary table-bordered table-hover table-striped">

            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody class="text-center">

                @foreach ($data_buku as $item)
                    <tr>

                        <th scope="row">
                            {{ $loop->iteration }}
                        </th>

                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->tahunterbit }}</td>
                        <td>{{ $item->harga }}</td>

                        <td>

                            <form action="{{ route('deletebuku', ['id' => $item->id]) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">

                                    Hapus
                                </button>
                            </form>

                            <a href="{{ route('editbuku', ['id' => $item->id]) }}"
                                class="btn btn-outline-warning btn-sm">

                                Edit
                            </a>

                            <a href="{{ route('detailbuku', ['id' => $item->id]) }}"
                                class="btn btn-outline-info btn-sm">

                                Detail
                            </a>

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

@endsection