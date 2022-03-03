<?php

namespace App\Http\Controllers;

use App\Console\Kernel;
use App\Model\Keterangan_iks;
use Illuminate\Http\Request;

class Keterangan_iksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $keterangan = Keterangan_iks::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data keterangan iks',
            'data' => $keterangan
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
            'keterangan' => 'required',
            'warna' => 'required',
            'nilai_id' => 'required',
        ]);

        $keterangan = $request->input('keterangan');
        $warna = $request->input('warna');
        $nilai_id = $request->input('nilai_id');


        $keterangan_iks = new Keterangan_iks([
            'keterangan' => $keterangan,
            'warna' => $warna,
            'nilai_id' => $nilai_id,

        ]);
        $keterangan_iks->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data keterangan iks',
            'jawaban' => $keterangan_iks
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
        $keterangan_iks = Keterangan_iks::make($request->all(), [
            'keterangan' => 'required',
            'warna' => 'required',
            'nilai_id' => 'required',


        ]);

        $keterangan_iks = Keterangan_iks::find($id);
        $keterangan_iks->update([
            'keterangan' => $request->input('keterangan'),
            'warna' => $request->input('warna'),
            'nilai_id' => $request->input('nilai_id'),

        ]);
        $keterangan_iks->save();

        if ($keterangan_iks) {
            return response()->json([
                'success' => true,
                'message' => 'Keterangan Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Keterangan Gagal Diupdate!',
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
        $keterangan = Keterangan_iks::findOrFail($id);
        $keterangan->delete();

        if ($keterangan) {
            return response()->json([
                'success' => true,
                'message' => 'Keterangan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Keterangan Gagal Dihapus!',
            ], 400);
        }
    }
}
