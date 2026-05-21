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
        <a href="{{ route('jadwal.create') }}" class="btn btn-success mb-3">
            + Tambah Jadwal
        </a>

        <!-- Table -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Kode_Matkul</th>
                    <th>NIDN</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th width="180px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            $no = 1;
            foreach ($jadwal as $j): 
            ?>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $j->matakuliah->nama_matakuliah }}</td>
                    <td>{{ $j->dosen->nidn }}</td>
                    <td>{{ $j->kelas }}</td>
                    <td>{{ $j->hari }}</td>
                    <td>{{ $j->jam }}</td>
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
