@extends('layout')

@section('content')
<h2>📚 Data Buku</h2>

<a class="button" href="/buku/create">Tambah Buku</a>
<br><br>

<table class="table">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($buku as $b)
    <tr>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->tahun }}</td>
        <td>{{ $b->stok }}</td>
        <td>
            <a class="button" href="/buku/{{ $b->id }}/edit">Edit</a>
            <button class="button btn-danger" onclick="openModal('del{{$b->id}}')">Hapus</button>
        </td>
    </tr>

    <!-- Modal Delete -->
    <div class="modal-bg" id="del{{$b->id}}">
        <div class="modal">
            <h3>Yakin ingin menghapus?</h3>
            <p>{{ $b->judul }}</p>

            <form method="POST" action="/buku/{{ $b->id }}">
                @csrf
                @method('DELETE')
                <button class="button btn-danger">Hapus</button>
                <button type="button" class="button" onclick="closeModal('del{{$b->id}}')">Batal</button>
            </form>
        </div>
    </div>
    @endforeach

</table>
@endsection
