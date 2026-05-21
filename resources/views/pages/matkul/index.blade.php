@extends('layouts.template')
@section('content')
    <div class="container mt-5">
        <h3 class="mb-4">Jadwal</h3>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <!-- Tombol Tambah -->
        <a href="{{ route('matkul.create') }}" class="btn btn-success mb-3">
            + Tambah Jadwal
        </a>

        <!-- Table -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Kode_Matkul</th>
                    <th>Nama Matkul</th>
                    <th>SKS</th>
                    <th width="180px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            $no = 1;
            foreach ($matakuliah as $item): 
            ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $item['kode_matakuliah'] ?></td>
                    <td><?= $item['nama_matakuliah'] ?></td>
                    <td><?= $item['sks'] ?></td>
                    <td class="text-center">
                        {{-- edit.php?id=<?= $dosen['id'] ?> --}}
                        <!-- Edit -->
                        <a href="" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Hapus -->
                        {{-- hapus.php?id=<?= $jadwal['id'] ?> --}}
                        <a href="" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>

                <!-- Jika data kosong -->
                <?php if(empty($data)): ?>
                {{-- <tr>
                    <td colspan="4" class="text-center text-muted">Data tidak tersedia</td>
                </tr> --}}
                <?php endif; ?>
            </tbody>
        </table>
    </div>
@endsection
