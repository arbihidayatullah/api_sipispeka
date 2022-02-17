<?php

namespace App\Http\Controllers;

use App\Model\Order_pelayanan;
use Illuminate\Http\Request;

class Order_pelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order_p = Order_pelayanan::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data order pelayanan iks',
            'data' => $order_p
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
            'users_id' => 'required',
            'pelayanans_id' => 'required'
        ]);

        $keluhan = $request->input('keluhan');
        $users_id = $request->input('users_id');
        $pelayanans_id = $request->input('pelayanans_id');

        $order_p = new Order_pelayanan([
            'keluhan' => $keluhan,
            'users_id' => $users_id,
            'pelayanans_id' => $pelayanans_id,
        ]);
        $order_p->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data order pelayanan iks',
            'jawaban' => $order_p
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
        $order_p = Order_pelayanan::make($request->all(), [
            'keluhan' => 'required',
            'users_id' => 'required',
            'pelayanans_id' => 'required'

        ]);

        $order_p = Order_pelayanan::whereId($request->input('id'))->update([
            'keluhan' => $request->input('keluhan'),
            'users_id' => $request->input('users_id'),
            'pelayanans_id' => $request->input('pelayanans_id'),
        ]);

        if ($order_p) {
            return response()->json([
                'success' => true,
                'message' => 'Order Pelayanan Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Order Pelayanan Gagal Diupdate!',
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
        $order_p = Order_pelayanan::findOrFail($id);
        $order_p->delete();

        if ($order_p) {
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
