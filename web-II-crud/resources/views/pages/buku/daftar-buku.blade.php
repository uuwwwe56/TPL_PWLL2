@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <h1>Halaman Buku</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card p-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('form-create') }}" class="btn btn-primary btn-sm">Tambah Data</a>

                <form class="d-flex align-items-center gap-2">
                    <div class="input-group input-group-sm" width="250px">
                        <input name="keyword" type="text" class="form-control" placeholder="Cari data">
                        <button class="btn btn-sm btn-success" type="submit">Cari</button>
                    </div>
                </form>

            </div>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">NO</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Harga</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Jumlah Halaman</th>
                        <th scope="col">Kategori</th>
                        <th scope="col" width="25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataBuku as $index => $item)
                        <tr>

                            <td class="text-center">
                                {{ $dataBuku->firstItem() + $index }}
                            </td>

                            <td>{{ $item->judul }}</td>

                            <td>{{ $item->penulis }}</td>

                            <td>{{ $item->tahun_terbit }}</td>

                            <td>{{ $item->harga }}</td>

                            <td>{{ $item->detail->isbn ?? '-' }}</td>

                            <td>{{ $item->detail->jumlah_halaman ?? '-' }}</td>

                            <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>

                            <td class="text-center">

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#hapus{{ $item->id }}">
                                    Hapus
                                </button>

                                <a href="{{ route('edit-buku', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="{{ route('detail-buku', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">
                                    Detail
                                </a>

                            </td>

                        </tr>
                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1"
                            aria-labelledby="hapusLabel{{ $item->id }}" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="hapusLabel{{ $item->id }}">
                                            Konfirmasi Hapus
                                        </h1>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        Yakin ingin menghapus buku
                                        <strong>{{ $item->judul }}</strong> ?
                                    </div>

                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Batal
                                        </button>

                                        <form action="{{ route('delete-buku', ['id' => $item->id]) }}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                        <tr>
                            <td colspan="8">
                                <span class="text-danger">
                                    data yang anda cari tidak ada
                                </span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $dataBuku->links() }}
        </div>
    </div>
@endsection
