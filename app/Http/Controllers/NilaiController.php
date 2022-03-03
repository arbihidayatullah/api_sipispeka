<?php

namespace App\Http\Controllers;

use App\Model\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nilai = Nilai::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data nilai iks',
            'data' => $nilai
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
            'nilai_iks' => 'required',
            'iks_id' => 'required',

        ]);

        $nilai_iks = $request->input('nilai_iks');
        $iks_id = $request->input('iks_id');



        $nilai = new Nilai([
            'nilai_iks' => $nilai_iks,
            'iks_id' => $iks_id,


        ]);
        $nilai->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data nilai iks',
            'jawaban' => $nilai
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
        $nilai = Nilai::make($request->all(), [
            'nilai_iks' => 'required',
            'iks_id' => 'required',
        ]);

        $nilai = Nilai::find($id);
        $nilai->update([
            'nilai_iks' => $request->input('nilai_iks'),
            'iks_id' => $request->input('iks_id'),
        ]);
        $nilai->save();

        if ($nilai) {
            return response()->json([
                'success' => true,
                'message' => 'Nilai Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Nilai Gagal Diupdate!',
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
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        if ($nilai) {
            return response()->json([
                'success' => true,
                'message' => 'Nilai Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Nilai Gagal Dihapus!',
            ], 400);
        }
    }
}
