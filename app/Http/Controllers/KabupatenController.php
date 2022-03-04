<?php

namespace App\Http\Controllers;

use App\Model\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kabupaten = Kabupaten::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data kabupaten',
            'data' => $kabupaten
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
            'nama_kabupaten' => 'required',
            'provinsi_id' => 'required'
        ]);

        $nama_kabupaten = $request->input('nama_kabupaten');
        $provinsi_id = $request->input('provinsi_id');

        $kabupaten = new Kabupaten([
            'nama_kabupaten' => $nama_kabupaten,
            'provinsi_id' => $provinsi_id
        ]);
        $kabupaten->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data kabupaten',
            'jawaban' => $kabupaten
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
        $kabupaten = Kabupaten::make($request->all(), [
            'nama_kabupaten' => 'required',
            'provinsi_id' => 'required',

        ]);

        $kabupaten = Kabupaten::find($id);
        $kabupaten->update([
            'nama_kabupaten' => $request->input('nama_kabupaten'),
            'provinsi_id' => $request->input('provinsi_id'),
        ]);
        $kabupaten->save();

        if ($kabupaten) {
            return response()->json([
                'success' => true,
                'message' => 'Kabupaten Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kabupaten Gagal Diupdate!',
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
        $kabupaten = Kabupaten::findOrFail($id);
        $kabupaten->delete();

        if ($kabupaten) {
            return response()->json([
                'success' => true,
                'message' => 'Kabupaten Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kabupaten Gagal Dihapus!',
            ], 400);
        }
    }
}
