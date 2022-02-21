<?php

namespace App\Http\Controllers;

use App\Model\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pelayanan = Pelayanan::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data pelayanan iks',
            'data' => $pelayanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required',
            'iks_id' => 'required'
        ]);

        $nama = $request->input('nama');
        $gambar = $request->input('gambar');
        $iks_id = $request->input('iks_id');

        $pelayanan = new Pelayanan([
            'nama' => $nama,
            'gambar' => $gambar,
            'iks_id' => $iks_id,
        ]);
        $pelayanan->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data pelayanan iks',
            'jawaban' => $pelayanan
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pelayanan = Pelayanan::make($request->all(), [
            'nama' => 'required',
            'gambar' => 'required',
            'iks_id' => 'required'

        ]);

        $pelayanan = Pelayanan::find($id);
        $pelayanan->update([
            'nama' => $request->input('nama'),
            'gambar' => $request->input('gambar'),
            'iks_id' => $request->input('iks_id'),
        ]);
        $pelayanan->save();

        if ($pelayanan) {
            return response()->json([
                'success' => true,
                'message' => 'Pelayanan Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pelayanan Gagal Diupdate!',
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pelayanan = Pelayanan::findOrFail($id);
        $pelayanan->delete();

        if ($pelayanan) {
            return response()->json([
                'success' => true,
                'message' => 'Pelayanan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pelayanan Gagal Dihapus!',
            ], 400);
        }
    }
}
