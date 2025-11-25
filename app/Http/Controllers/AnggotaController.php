<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index() {
        $data = Anggota::all();
        return view('anggota.index', compact('data'));
    }

    public function create() { return view('anggota.create'); }

    public function store(Request $r) {
        Anggota::create($r->all());
        return redirect()->route('anggota.index');
    }

    public function edit(Anggota $anggota) {
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $r, Anggota $anggota) {
        $anggota->update($r->all());
        return redirect()->route('anggota.index');
    }

    public function destroy(Anggota $anggota) {
        $anggota->delete();
        return back();
    }
}
