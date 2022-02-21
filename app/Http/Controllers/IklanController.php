<?php

namespace App\Http\Controllers;

use App\Model\Iklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $iklan = Iklan::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data iklan',
            'data' => $iklan
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
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $deskripsi = $request->input('deskripsi');
        $gambar = $request->input('gambar');

        $iklan = new Iklan([
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,

        ]);
        $iklan->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data Iklan',
            'jawaban' => $iklan
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
        // $deskripsi = $request->deskripsi;
        // $gambar = $request->gambar;

        // $iklan = Iklan::find($id);
        // $iklan->deskripsi = $deskripsi;
        // $iklan->gambar = $gambar;
        // $iklan->save();

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'update telah berhasil',
        //     'iklan' => $iklan
        // ]);
        $iklan = Iklan::make($request->all(), [
            'deskripsi' => 'required',
            'gambar' => 'required',

        ]);

        $iklan = Iklan::find($id);
        $iklan->update([
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $request->input('gambar'),

        ]);
        $iklan->save();

        if ($iklan) {
            return response()->json([
                'success' => true,
                'message' => 'Iklan Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Iklan Gagal Diupdate!',
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
        $iklan = Iklan::findOrFail($id);
        $iklan->delete();

        if ($iklan) {
            return response()->json([
                'success' => true,
                'message' => 'Iklan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Iklan Gagal Dihapus!',
            ], 400);
        }
    }
}
