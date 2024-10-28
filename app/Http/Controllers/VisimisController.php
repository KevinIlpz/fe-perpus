<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimis;
use Validator;

class VisimisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $visimis = Visimis::all();
        if ($visimis->isEmpty) {
            return response()->json([
                'data' => 'Data VisiMis Kosong',
                'error' => true
            ], 404); //404 Not Found
        }

        return response()->json([
            'data' => $visimis,
            'message' => 'Data VisiMi Ditemukan',
            'status' => 200
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'visi' => 'required|string|max:255',
            'misi' => 'required|text',
            'motto' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'message' => 'Adaa kelsahan',
                'data' => $validator->errors(),
            ], 404);
        }

        $visimis = Visimis::create([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'motto' => $request->motto,
        ]);

        return response()->json([
            'data' => 200,
            'message' => 'Data VisiMis Berhasil Ditambahkan',
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
    public function show(Visimis $visimis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visimis $visimis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visimis $visimis, string $id)
    {
        $visimis = Visimis::find($id);
        if (!$visimis) {
            return response()->json([
                'error' => true,
                'message' => 'Data VisiMis Tidak Ditemukan',
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'visi' => 'required|string|max:255',
            'misi' => 'required|text',
            'motto' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal melakukan update data visimis',
                'data' => $validator->errors(),
            ], 400);
        }

        $visimis->visi = $request->input('visi');
        $visimis->misi = $request->input('misi');
        $visimis->motto = $request->input('motto');

        $visimis->save();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil Melakukan Update Data VisiMis',
        ], 200) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visimis $visimis, string $id)
    {
        $visimis = Visimis::find($id);
        if (!$visimis) {
            return response()->json([
                'status' => 400,
                'data' => 'Gagal Menghapus Data Visimis',
            ], 400);
        }

        $visimis->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil Menghapus Data VisiMis',
        ]);
    }
}
