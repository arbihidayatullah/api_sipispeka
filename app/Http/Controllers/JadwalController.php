<?php

namespace App\Http\Controllers;

use App\Model\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jadwal = Jadwal::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data jadwal',
            'data' => $jadwal
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
            'tanggal' => 'required',
            'kategori' => 'required',
            'agenda' => 'required',
            'keterangan' => 'required'
        ]);

        $tanggal = $request->input('tanggal');
        $kategori = $request->input('kategori');
        $agenda = $request->input('agenda');
        $keterangan = $request->input('keterangan');

        $jadwal = new Jadwal([
            'tanggal' => $tanggal,
            'kategori' => $kategori,
            'agenda' => $agenda,
            'keterangan' => $keterangan,
        ]);
        $jadwal->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data jadwal',
            'jawaban' => $jadwal
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
        $jadwal = Jadwal::make($request->all(), [
            'tanggal' => 'required',
            'kategori' => 'required',
            'agenda' => 'required',
            'keterangan' => 'required'

        ]);

        $jadwal = Jadwal::whereId($request->input('id'))->update([
            'tanggal' => $request->input('tanggal'),
            'kategori' => $request->input('kategori'),
            'agenda' => $request->input('agenda'),
            'keterangan' => $request->input('keterangan'),
        ]);

        if ($jadwal) {
            return response()->json([
                'success' => true,
                'message' => 'Order Jadwal Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Order Jadwal Gagal Diupdate!',
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
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        if ($jadwal) {
            return response()->json([
                'success' => true,
                'message' => 'Order Jadwal Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Order Jadwal Gagal Dihapus!',
            ], 400);
        }
    }
}
