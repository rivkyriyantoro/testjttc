<?php

namespace App\Http\Controllers;

use App\Models\JabatanPegawai;
use Illuminate\Http\Request;

class JabatanPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data jabatan pegawai
        return JabatanPegawai::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        // Membuat data jabatan pegawai baru
        $jabatanPegawai = JabatanPegawai::create($request->all());

        return response()->json($jabatanPegawai, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil data jabatan pegawai berdasarkan ID
        return JabatanPegawai::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
        ]);

        // Mengambil data jabatan pegawai berdasarkan ID
        $jabatanPegawai = JabatanPegawai::findOrFail($id);
        // Mengupdate data jabatan pegawai
        $jabatanPegawai->update($request->all());

        return response()->json($jabatanPegawai, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Mengambil data jabatan pegawai berdasarkan ID dan menghapusnya
        JabatanPegawai::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
