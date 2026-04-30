@section('title', 'Dashboard')
@extends('layout.master')
@section('content')

    <h1 class="mt-3 text-white">Produk</h1>
    <div class="card">
        <div class="card-body">
            This is some text within a card body.
        </div>
    </div>
    <div class="card mt-2">
        <div class="">
            <button type="button" class="btn mx-3 my-3 btn-outline-primary">Tambah Produk</button>
        </div>
        <table class="table table-primary table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <button type="button" class="btn btn-outline-danger btn-sm">Hapus</button>
                        <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                        <button type="button" class="btn btn-outline-danger btn-sm">Hapus</button>
                        <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>@social</td>
                    <td>
                        <button type="button" class="btn btn-outline-danger btn-sm">Hapus</button>
                        <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
