<?php

namespace App\Http\Controllers;

use App\Model\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kecamatan = Kecamatan::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data kecamatan',
            'data' => $kecamatan
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
            'nama_kecamatan' => 'required',
            'kabupaten_id' => 'required'
        ]);

        $nama_kecamatan = $request->input('nama_kecamatan');
        $kabupaten_id = $request->input('kabupaten_id');

        $kecamatan = new Kecamatan([
            'nama_kecamatan' => $nama_kecamatan,
            'kabupaten_id' => $kabupaten_id
        ]);
        $kecamatan->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data kecamatan',
            'jawaban' => $kecamatan
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
        $kecamatan = Kecamatan::make($request->all(), [
            'nama_kecamatan' => 'required',
            'kabupaten_id' => 'required',

        ]);

        $kecamatan = Kecamatan::find($id);
        $kecamatan->update([
            'nama_kecamatan' => $request->input('nama_kecamatan'),
            'kabupaten_id' => $request->input('kabupaten_id'),
        ]);
        $kecamatan->save();

        if ($kecamatan) {
            return response()->json([
                'success' => true,
                'message' => 'Kecamatan Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kecamatan Gagal Diupdate!',
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
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();

        if ($kecamatan) {
            return response()->json([
                'success' => true,
                'message' => 'Kecamatan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kecamatan Gagal Dihapus!',
            ], 400);
        }
    }
}
