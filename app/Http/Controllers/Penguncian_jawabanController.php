<?php

namespace App\Http\Controllers;

use App\Model\Pengisian_iks;
use App\Model\Penguncian_jawaban;
use Illuminate\Http\Request;

class Penguncian_jawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $p_jawaban = Penguncian_jawaban::all();

        return response()->json([
            'status' => 'succes',
            'message' => 'data penguncian berhasil',
            'data' => $p_jawaban
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
            'status' => 'required'
        ]);

        $status = $request->input('status');

        $p_jawaban = new Penguncian_jawaban([
            'status' => $status
        ]);
        $p_jawaban->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data rule iks',
            'jawaban' => $p_jawaban
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
        $p_jawaban = Penguncian_jawaban::make($request->all(), [
            'status' => 'required',

        ]);

        $p_jawaban = Penguncian_jawaban::find($id);
        $p_jawaban->update([
            'status' => $request->input('status'),
        ]);
        $p_jawaban->save();

        if ($p_jawaban) {
            return response()->json([
                'success' => true,
                'message' => 'Penguncian Jawaban Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Penguncian Jawaban Gagal Diupdate!',
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
        $p_jawaban = Penguncian_jawaban::findOrFail($id);
        $p_jawaban->delete();

        if ($p_jawaban) {
            return response()->json([
                'success' => true,
                'message' => 'Penguncian Jawaban Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Penguncian Jawaban Gagal Dihapus!',
            ], 400);
        }
    }
}
