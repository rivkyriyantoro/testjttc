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
        return Pegawai::with('jabatan', 'kontrak')->get();
    }

    public function store(Request $request)
    {
        $pegawai = Pegawai::create($request->all());
        return response()->json($pegawai, 201);
    }

    public function show($id)
    {
        return Pegawai::with('jabatan', 'kontrak')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        return response()->json($pegawai, 200);
    }

    public function destroy($id)
    {
        Pegawai::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
