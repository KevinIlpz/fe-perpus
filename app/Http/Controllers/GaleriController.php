<?php

namespace App\Http\Controllers;

use App\Http\Contorllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Validator;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeri = Galeri::all();
        if ($galeri->isEmpty)
        {
            return response()->json([
                'data' => 'Data Galeri Kosong',
                'error' => true
            ], 404);
        }

        return response()->json([
            'data' => $galeri,
            'message' => 'Data Galeri Ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Galeri::make($request->all(), [
            'file' => 'required|string|max:255',
            'kategori_id' => 'required|exists:galeri_kategoris,id',
            'keterangan' => 'required|string|max:255',
            'oleh' => 'required|integer',
            'tgl' => 'required|dateTime'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors(),
            ], 404);
        }

        $galeri = Galeri::create([
            'file' => $request->file,
            'kategori_id' => $request->kategori_id,
            'keterangan' => $request->keterangan,
            'oleh' => $request->oleh,
            'tgl' => $request->tgl,
        ]);

        return response()->json([
            'data' => 200,
            'message' => 'Data Galeri Berhasil Ditambahkan',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri, string $id)
    {
        $galeri = Galeri::find($id);
        if(!$galeri) {
            return response()->json([
                'status' => 400,
                'message' => 'Data Galeri tidak ditemukan'
            ], 400);

            $validator = Validator::make($request->all(), [
                'file' => 'required|string|max:255',
                'kategori_id' => 'required|exists:galeri_kategoris,id',
                'keterangan' => 'required|string|max:255',
                'oleh' => 'required|integer',
                'tgl' => 'required|dateTime'
            ]);
        }

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal melakukan update data galeri',
                'data' => $validator->errors(),
            ], 400);
        }

        $galeri->file = $request->input('file');
        $galeri->kategori_id = $request->input('kategori_id');
        $galeri->keterangan = $request->input('keterangan');
        $galeri->oleh = $request->input('oleh');
        $galeri->tgl = $request->input('tgl');

        $galeri->save();

        return response()->json([
            'data' => 200,
            'message' => 'Data Galeri berhasil Diupdate',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri, string $id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal Mengahapus Data Galeri',
            ], 400);
        }

        $galeri->delete();

        return response()->json([
            'data' => 200,
            'message' => 'Data Galeri berhasil dihapus'
        ], 200);
    }
}
