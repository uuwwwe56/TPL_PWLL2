@extends('layouts.template')
@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Data KRS</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('krs.create') }}" class="btn btn-success mb-3">
        + Tambah KRS
    </a>

    <table class="table table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Mahasiswa</th>
                <th>Matakuliah</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($krs as $k): ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $k->mahasiswa->nama ?></td>
                <td><?= $k->matakuliah->nama_matakuliah ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
@endsection