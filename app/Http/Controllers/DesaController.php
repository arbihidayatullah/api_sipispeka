<?php

namespace App\Http\Controllers;

use App\Model\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $desa = Desa::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data kabupaten',
            'data' => $desa
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
            'nama_desa' => 'required',
            'kecamatan_id' => 'required'
        ]);

        $nama_desa = $request->input('nama_desa');
        $kecamatan_id = $request->input('kecamatan_id');

        $desa = new Desa([
            'nama_desa' => $nama_desa,
            'kecamatan_id' => $kecamatan_id
        ]);
        $desa->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data desa',
            'jawaban' => $desa
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
        $desa = Desa::make($request->all(), [
            'nama_desa' => 'required',
            'kecamatan_id' => 'required',

        ]);

        $desa = Desa::find($id);
        $desa->update([
            'nama_desa' => $request->input('nama_desa'),
            'kecamatan_id' => $request->input('kecamatan_id'),
        ]);
        $desa->save();

        if ($desa) {
            return response()->json([
                'success' => true,
                'message' => 'Desa Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Desa Gagal Diupdate!',
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
        $desa = Desa::findOrFail($id);
        $desa->delete();

        if ($desa) {
            return response()->json([
                'success' => true,
                'message' => 'Desa Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Desa Gagal Dihapus!',
            ], 400);
        }
    }
}
