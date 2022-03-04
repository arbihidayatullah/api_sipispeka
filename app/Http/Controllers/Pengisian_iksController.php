<?php

namespace App\Http\Controllers;

use App\Model\Pengisian_iks;
use Illuminate\Http\Request;

class Pengisian_iksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $p_iks = Pengisian_iks::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data pengisian iks',
            'data' => $p_iks
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
            'rule' => 'required'
        ]);

        $rule = $request->input('rule');

        $p_iks = new Pengisian_iks([
            'rule' => $rule
        ]);
        $p_iks->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data rule iks',
            'jawaban' => $p_iks
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
        $p_iks = Pengisian_iks::make($request->all(), [
            'rule' => 'required',

        ]);

        $p_iks = Pengisian_iks::find($id);
        $p_iks->update([
            'rule' => $request->input('rule'),
        ]);
        $p_iks->save();

        if ($p_iks) {
            return response()->json([
                'success' => true,
                'message' => 'Rule IKS Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Rule IKS Gagal Diupdate!',
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
        $p_iks = Pengisian_iks::findOrFail($id);
        $p_iks->delete();

        if ($p_iks) {
            return response()->json([
                'success' => true,
                'message' => 'Rule  IKS Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Rule IKS Gagal Dihapus!',
            ], 400);
        }
    }
}
