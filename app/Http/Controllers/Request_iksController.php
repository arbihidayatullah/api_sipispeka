<?php

namespace App\Http\Controllers;

use App\Model\Request_iks;
use App\Model\User;
use Illuminate\Http\Request;

class Request_iksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $request_iks = Request_iks::all();

        return response()->json([
            'status' => 'Succes',
            'message' => 'request iks user',
            'data' => $request_iks

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
            'user_id' => 'required'
        ]);

        $user_id = $request->input('user_id');

        $request_iks = new Request_iks([
            'user_id' => $user_id
        ]);
        $request_iks->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data role iks',
            'jawaban' => $request_iks
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
        //
        $request_iks = Request_iks::where('user_id', $user_id)->get();

        return response()->json([
            'status' => 'Succes',
            'message' => 'request iks user',
            'data' => $request_iks

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
        $request_id = Request_iks::findOrFail($id);
        $request_id->delete();

        if ($request_id) {
            return response()->json([
                'success' => true,
                'message' => 'Requst_iks Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Request_iks Gagal Dihapus!',
            ], 400);
        }
    }
}
