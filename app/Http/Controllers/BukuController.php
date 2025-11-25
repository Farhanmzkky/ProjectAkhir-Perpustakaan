<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create() { return view('buku.create'); }

    public function store(Request $r) {
        Buku::create($r->all());
        return redirect()->route('buku.index');
    }

    public function edit(Buku $buku) {
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $r, Buku $buku) {
        $buku->update($r->all());
        return redirect()->route('buku.index');
    }

    public function destroy(Buku $buku) {
        $buku->delete();
        return back();
    }
}
