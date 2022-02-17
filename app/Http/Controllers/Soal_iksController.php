<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Soal_iks;
use SoapVar;

class Soal_iksController extends Controller
{
    public function index(Request $request)
    {
        $soal_iks = Soal_iks::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data soal iks',
            'data' => $soal_iks
        ]);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'soal' => 'required'
        ]);

        $soal_iks = $request->input('soal');

        $soal_iks = new Soal_iks([
            'soal' => $soal_iks
        ]);
        $soal_iks->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data soal iks',
            'soal' => $soal_iks
        ]);
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
        $soal_iks = Soal_iks::make($request->all(), [
            'soal' => 'required',

        ]);

        $soal_iks = Soal_iks::whereId($request->input('id'))->update([
            'soal' => $request->input('soal'),
        ]);

        if ($soal_iks) {
            return response()->json([
                'success' => true,
                'message' => 'Jawaban Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Jawaban Gagal Diupdate!',
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
        $soal_iks = Soal_iks::findOrFail($id);
        $soal_iks->delete();

        if ($soal_iks) {
            return response()->json([
                'success' => true,
                'message' => 'soal Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'soal Gagal Dihapus!',
            ], 400);
        }
    }
}
