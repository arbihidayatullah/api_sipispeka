<?php

namespace App\Http\Controllers;

use App\Model\Jawaban_iks;
use App\Model\Iks;
use Illuminate\Http\Request;

class Jawaban_iksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban_iks = Jawaban_iks::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data jawaban iks',
            'data' => $jawaban_iks
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'jawaban' => 'required',
            'soal_iks_id' => 'required',
            'iks_id' => 'required',
            'pelayanan_id' => 'required',

        ]);

        $jawaban = $request->input('jawaban');
        $soal_iks_id = $request->input('soal_iks_id');
        $iks_id = $request->input('iks_id');
        $pelayanan_id = $request->input('iks_id');

        $jawaban_iks = new Jawaban_iks([
            'jawaban' => $jawaban,
            'soal_iks_id' => $soal_iks_id,
            'iks_id' => $iks_id,
            'pelayanan_id' => $pelayanan_id,

        ]);
        $jawaban_iks->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data jawaban iks',
            'jawaban' => $jawaban_iks
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
        $jawaban_iks = Jawaban_iks::make($request->all(), [
            'jawaban' => 'required',
            'soal_iks_id' => 'required',
            'iks_id' => 'required',
            'pelayanan_id' => 'required',

        ]);

        $jawaban_iks = Jawaban_iks::find($id);
        $jawaban_iks->update([
            'jawaban' => $request->input('jawaban'),
            'soal_iks_id' => $request->input('soal_iks_id'),
            'iks_id' => $request->input('iks_id'),
            'pelayanan_id' => $request->input('pelayanan_id'),
        ]);
        $jawaban_iks->save();

        if ($jawaban_iks) {
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
        $jawaban_iks = Jawaban_iks::findOrFail($id);
        $jawaban_iks->delete();

        if ($jawaban_iks) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Dihapus!',
            ], 400);
        }
    }

    public function show($user_id)
    {
        $iks = Iks::where('user_id', $user_id)->get()->last();
        $jawaban_iks = Jawaban_iks::where('iks_id', $iks->id)->get();

        return response()->json([
            'success' => true,
            'message' => 'Jawaban IKS',
            'data' => $jawaban_iks,
        ], 200);
    }

    public function deletelast($user_id)
    {
        $iks = Iks::where('user_id', $user_id)->get()->last();
        $jawaban_iks = Jawaban_iks::where('iks_id', $iks->id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'IKS Terhapus',
            'data' => $jawaban_iks,
        ], 200);
    }
}
