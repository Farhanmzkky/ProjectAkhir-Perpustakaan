<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index() {
        $data = Peminjaman::with(['anggota','buku'])->get();
        $anggota = Anggota::all();
        $buku = Buku::all();
        return view('peminjaman.index', compact('data','anggota','buku'));
    }

    public function store(Request $r) {
        Peminjaman::create([
            'anggota_id' => $r->anggota_id,
            'buku_id' => $r->buku_id,
            'tanggal_pinjam' => now(),
        ]);
        return back();
    }

    public function pengembalian($id) {
        $p = Peminjaman::find($id);
        $p->update([
            'tanggal_kembali' => now(),
            'status' => 'kembali'
        ]);
        return back();
    }
}
