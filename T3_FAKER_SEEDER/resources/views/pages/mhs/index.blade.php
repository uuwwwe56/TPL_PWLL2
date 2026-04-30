@extends('layouts.template')
@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Data Mahasiswa</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('mhs.create') }}" class="btn btn-success mb-3">
        + Tambah Mahasiswa
    </a>

    <table class="table table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($mahasiswa as $m): ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $m['npm'] ?></td>
                <td><?= $m['nama'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
@endsection