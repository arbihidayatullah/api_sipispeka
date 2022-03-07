<?php

namespace App\Http\Controllers;

use App\Model\Order_konsultasi;
use App\Model\Pelayanan;
use Illuminate\Http\Request;

class Order_konsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order_k = Order_konsultasi::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data order konsultasi iks',
            'data' => $order_k
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
            'keluhan' => 'required',
            'user_id' => 'required',
            'pelayanan_id' => 'required'
        ]);

        $keluhan = $request->input('keluhan');
        $users_id = $request->input('user_id');
        $pelayanans_id = $request->input('pelayanan_id');

        $order_k = new Order_konsultasi([
            'keluhan' => $keluhan,
            'user_id' => $users_id,
            'pelayanan_id' => $pelayanans_id,
        ]);
        $order_k->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data order pelayanan iks',
            'jawaban' => $order_k
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {

        $order_k = Order_konsultasi::where('user_id', $user_id)->get();

        return response()->json([
            'success' => true,
            'message' => 'Jawaban IKS',
            'data' => $order_k,
        ], 200);
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
        $order_k = Order_konsultasi::make($request->all(), [
            'keluhan' => 'required',
            'users_id' => 'required',
            'pelayanans_id' => 'required'

        ]);

        $order_k = Order_konsultasi::find($id);
        $order_k->update([
            'keluhan' => $request->input('keluhan'),
            'users_id' => $request->input('users_id'),
            'pelayanans_id' => $request->input('pelayanans_id'),
        ]);
        $order_k->save();

        if ($order_k) {
            return response()->json([
                'success' => true,
                'message' => 'Order Konsultasi Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Order Konsultasi Gagal Diupdate!',
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
        $order_k = Order_konsultasi::findOrFail($id);
        $order_k->delete();

        if ($order_k) {
            return response()->json([
                'success' => true,
                'message' => 'Order Konsultasi Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Order Konsultasi Gagal Dihapus!',
            ], 400);
        }
    }
}
