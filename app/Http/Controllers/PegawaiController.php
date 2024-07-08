<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\JabatanPegawai;
use App\Models\Kontrak;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::with(['jabatan', 'kontrak'])->get();
        return view('pegawais.index', compact('pegawais'));
    }

    public function create()
    {
        $jabatans = JabatanPegawai::all();
        $kontraks = Kontrak::all();
        return view('pegawais.create', compact('jabatans', 'kontraks'));
    }

    public function store(Request $request)
    {
        Pegawai::create($request->all());
        return redirect()->route('pegawais.index');
    }

    public function edit(Pegawai $pegawai)
    {
        $jabatans = JabatanPegawai::all();
        $kontraks = Kontrak::all();
        return view('pegawais.edit', compact('pegawai', 'jabatans', 'kontraks'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai->update($request->all());
        return redirect()->route('pegawais.index');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawais.index');
    }
}
