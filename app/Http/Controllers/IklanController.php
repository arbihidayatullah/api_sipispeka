<?php

namespace App\Http\Controllers;

use File;

use App\Model\Iklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $iklan = Iklan::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data iklan',
            'data' => $iklan
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

    public function uploadImage(Request $request)
    {

        $this->validate($request, [
            'deskripsi' => 'required',
            'gambar' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';
        $file->move($tujuan_upload, $nama_file);


        $iklan = Iklan::create([
            'gambar' => $nama_file,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'input data Iklan',
            'jawaban' => $iklan
        ]);
    }



    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $deskripsi = $request->input('deskripsi');
        $gambar = $request->input('gambar');

        $iklan = new Iklan([
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,

        ]);
        $iklan->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data Iklan',
            'jawaban' => $iklan
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
        // $deskripsi = $request->deskripsi;
        // $gambar = $request->gambar;

        // $iklan = Iklan::find($id);
        // $iklan->deskripsi = $deskripsi;
        // $iklan->gambar = $gambar;
        // $iklan->save();

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'update telah berhasil',
        //     'iklan' => $iklan
        // ]);
        $iklan = Iklan::make($request->all(), [
            'deskripsi' => 'required',
            'gambar' => 'required',

        ]);

        $iklan = Iklan::find($id);
        $iklan->update([
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $request->input('gambar'),

        ]);
        $iklan->save();

        if ($iklan) {
            return response()->json([
                'success' => true,
                'message' => 'Iklan Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Iklan Gagal Diupdate!',
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
        // $iklan = Iklan::findOrFail($id);
        // $iklan->delete();
        //--
        $iklan = Iklan::where('id', $id)->first();
        // File::delete('images/' . $iklan->file);

        Iklan::where('id', $id)->delete();
        //=
        // // Ambil Data
        // $iklan = Iklan::where('id', $id)->first();

        // // Path Video Lama
        // $iklan = public_path('images/' . $iklan->video);

        // // Cek Apakah ada file videonya
        // if(File::exists($iklan){
        // 	// Jika File tersebut ada
        //     // Hapus File tersebut
        //     File::delete($iklan)
        // }

        //---------------------------------
        if ($iklan) {
            return response()->json([
                'success' => true,
                'message' => 'Iklan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Iklan Gagal Dihapus!',
            ], 400);
        }
    }
}
