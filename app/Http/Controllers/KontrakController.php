<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data kontrak
        return Kontrak::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        // Membuat data kontrak baru
        $kontrak = Kontrak::create($request->all());

        return response()->json($kontrak, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil data kontrak berdasarkan ID
        return Kontrak::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        // Mengambil data kontrak berdasarkan ID
        $kontrak = Kontrak::findOrFail($id);
        // Mengupdate data kontrak
        $kontrak->update($request->all());

        return response()->json($kontrak, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Mengambil data kontrak berdasarkan ID dan menghapusnya
        Kontrak::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
