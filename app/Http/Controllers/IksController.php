<?php

namespace App\Http\Controllers;

use App\Model\Iks;
use Illuminate\Http\Request;

class IksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $iks = Iks::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data iks',
            'data' => $iks
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
            'nilai' => 'required',
            'soal_id' => 'required',
            'jawaban_id' => 'required',
            'users_id' => 'required',
            'keterangan_id' => 'required'
        ]);

        $nilai = $request->input('nilai');
        $soal_id = $request->input('soal_id');
        $jawaban_id = $request->input('jawaban_id');
        $users_id = $request->input('users_id');
        $keterangan_id = $request->input('keterangan_id');

        $iks = new Iks([
            'nilai' => $nilai,
            'soal_id' => $soal_id,
            'jawaban_id' => $jawaban_id,
            'users_id' => $users_id,
            'keterangan_id' => $keterangan_id,
        ]);
        $iks->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data iks',
            'jawaban' => $iks
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
        $iks = Iks::make($request->all(), [
            'nilai' => 'required',
            'soal_id' => 'required',
            'jawaban_id' => 'required',
            'users_id' => 'required',
            'keterangan_id' => 'required'

        ]);

        $iks = Iks::whereId($request->input('id'))->update([
            'nilai' => $request->input('nilai'),
            'soal_id' => $request->input('soal_id'),
            'jawaban_id' => $request->input('jawaban_id'),
            'users_id' => $request->input('users_id'),
            'keterangan_id' => $request->input('keterangan_id'),
        ]);

        if ($iks) {
            return response()->json([
                'success' => true,
                'message' => 'IKS Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'IKS Gagal Diupdate!',
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
        $iks = Iks::findOrFail($id);
        $iks->delete();

        if ($iks) {
            return response()->json([
                'success' => true,
                'message' => 'IKS Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'IKS Gagal Dihapus!',
            ], 400);
        }
    }
}
