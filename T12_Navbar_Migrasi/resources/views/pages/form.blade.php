@section('title','form')
@extends('layout.master')

@section('content')
    <h1>FORM</h1>
    <form action="{{ route('create') }}" method="POST">
        @csrf
        <label for="npm">Npm : </label><br>
        <input type="text" name="npm"><br>
        <label for="npm">Nama : </label><br>
        <input type="text" name="nama"><br>

        <button type="submit">Simpan</button>
    </form>
@endsection