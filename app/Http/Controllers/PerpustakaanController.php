<?php

namespace App\Http\Controllers;


use App\Models\Perpus;
use Illuminate\Http\Request;


class PerpustakaanController extends Controller
{
    public function index()
    {
        return response()->json( Perpus::all());
    }

    public function show($no)
    {
        $rs = Perpus::find($no);
        if (!$rs) return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($rs);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tipe' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $rs = Perpus::create($request->all());
        return response()->json($rs, 201);
    }

    public function update(Request $request, $no)
    {
        $rs = Perpus::find($no);
        if (!$rs) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rs->update($request->all());
        return response()->json($rs);
    }

    public function destroy($no)
    {
        $rs = Perpus::find($no);
        if (!$rs) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rs->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
