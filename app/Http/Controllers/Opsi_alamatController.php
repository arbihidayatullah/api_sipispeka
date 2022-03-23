<?php

namespace App\Http\Controllers;

use App\Model\Opsi_alamat;
use Illuminate\Http\Request;

class Opsi_alamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $o_alamat = Opsi_alamat::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list opsi alamat berhasil',
            'data' => $o_alamat
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
            'status' => 'required',
            'kecamatan_id' => 'required'
        ]);

        $status = $request->input('status');
        $kecamatan_id = $request->input('kecamatan_id');

        $o_alamat = new Opsi_alamat([
            'status' => $status,
            'kecamatan_id' => $kecamatan_id,
        ]);
        $o_alamat->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data opsi alamat',
            'jawaban' => $o_alamat
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kecamatan_id)
    {
        //
        $o_alamat = Opsi_alamat::where('kecamatan_id', $kecamatan_id)->get();

        return response()->json([
            'status' => 'Succes',
            'message' => 'opsi alamat kota bumi selatan',
            'data' => $o_alamat

        ]);
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
        $o_alamat = Opsi_alamat::make($request->all(), [
            'status' => 'required',
            'kecamatan_id' => 'required'

        ]);

        $o_alamat = Opsi_alamat::find($id);
        $o_alamat->update([
            'status' => $request->input('status'),
            'kecamatan_id' => $request->input('kecamatan_id'),
        ]);
        $o_alamat->save();

        if ($o_alamat) {
            return response()->json([
                'success' => true,
                'message' => 'Opsi Alamat Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Opsi Alamat Gagal Diupdate!',
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
        $o_alamat = Opsi_alamat::findOrFail($id);
        $o_alamat->delete();

        if ($o_alamat) {
            return response()->json([
                'success' => true,
                'message' => 'Opsi Alamat Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Opsi Alamat Gagal Dihapus!',
            ], 400);
        }
    }
}
