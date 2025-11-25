<h1>Dashboard Perpustakaan</h1>

<ul>
    <li>Total Buku: {{ App\Models\Buku::count() }}</li>
    <li>Total Anggota: {{ App\Models\Anggota::count() }}</li>
    <li>Peminjaman Aktif: {{ App\Models\Peminjaman::where('status','dipinjam')->count() }}</li>
</ul>
