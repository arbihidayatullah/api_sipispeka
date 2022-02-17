<?php

namespace App\Http\Controllers;

use App\Model\Jawaban_iks;
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
            'jawaban' => 'required'
        ]);

        $jawaban_iks = $request->input('jawaban');

        $jawaban_iks = new Jawaban_iks([
            'jawaban' => $jawaban_iks
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

        ]);

        $jawaban_iks = Jawaban_iks::whereId($request->input('id'))->update([
            'jawaban' => $request->input('jawaban'),
        ]);

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
}
