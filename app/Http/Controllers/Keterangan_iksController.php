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
            'indeks' => 'required',
            'warna' => 'required',
        ]);

        $indeks = $request->input('indeks');
        $warna = $request->input('warna');


        $keterangan = new Keterangan_iks([
            'indeks' => $indeks,
            'warna' => $warna,

        ]);
        $keterangan->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data keterangan iks',
            'jawaban' => $keterangan
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
        $keterangan = Keterangan_iks::make($request->all(), [
            'indeks' => 'required',
            'warna' => 'required',


        ]);

        $keterangan = Keterangan_iks::find($id);
        $keterangan->update([
            'indeks' => $request->input('indeks'),
            'warna' => $request->input('warna'),

        ]);
        $keterangan->save();

        if ($keterangan) {
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
