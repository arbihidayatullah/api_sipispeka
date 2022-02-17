<?php

namespace App\Http\Controllers;

use App\Model\Intervensi;
use Illuminate\Http\Request;

class IntervensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $intervensi = Intervensi::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data intervensi',
            'data' => $intervensi
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
            'intervensi' => 'required',
            'keterangan' => 'required',
            'order_pelayanans_id' => 'required',
            'order_konsultasis_id' => 'required'
        ]);

        $intervensi = $request->input('intervensi');
        $keterangan = $request->input('keterangan');
        $order_pelayanans_id = $request->input('order_pelayanans_id');
        $order_konsultasis_id = $request->input('order_konsultasis_id');

        $intervensip = new Intervensi([
            'intervensi' => $intervensi,
            'keterangan' => $keterangan,
            'order_pelayanans_id' => $order_pelayanans_id,
            'order_konsultasis_id' => $order_konsultasis_id,
        ]);
        $intervensip->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data intervensi',
            'jawaban' => $intervensip
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
        $intervensip = Intervensi::make($request->all(), [
            'intervensi' => 'required',
            'keterangan' => 'required',
            'order_pelayanans_id' => 'required',
            'order_konsultasis_id' => 'required',

        ]);

        $intervensip = Intervensi::whereId($request->input('id'))->update([
            'intervensi' => $request->input('intervensi'),
            'keterangan' => $request->input('keterangan'),
            'order_pelayanans_id' => $request->input('order_pelayanans_id'),
            'order_konsultasis_id' => $request->input('order_konsultasis_id'),
        ]);

        if ($intervensip) {
            return response()->json([
                'success' => true,
                'message' => 'Intervensi Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Intervensi Gagal Diupdate!',
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
        $intervensi = Intervensi::findOrFail($id);
        $intervensi->delete();

        if ($intervensi) {
            return response()->json([
                'success' => true,
                'message' => 'Order Pelayanan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Order Pelayanan Gagal Dihapus!',
            ], 400);
        }
    }
}
