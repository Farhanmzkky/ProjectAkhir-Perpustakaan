@extends('layout')

@section('content')
<h2>Tambah Buku</h2>

<form method="POST" action="/buku">
    @csrf
    
    <label>Judul Buku</label>
    <input type="text" name="judul" required>

    <label>Penulis</label>
    <input type="text" name="penulis" required>

    <label>Tahun</label>
    <input type="number" name="tahun" required>

    <label>Stok</label>
    <input type="number" name="stok" required>

    <button class="button">Simpan</button>
</form>
@endsection
