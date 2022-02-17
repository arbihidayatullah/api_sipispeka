<?php

namespace App\Http\Controllers;


use App\Model\Users;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Users::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data user',
            'data' => $user
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
        $this->validate($request, [
            'nama' => 'required',
            'nik' =>  'required',
            'desa' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'norumah' => 'required',
            'nohp' => 'required',
            'password' => 'required|min:6',
            'role_id' => 'required'
        ]);

        $nama = $request->input('nama');
        $nik = $request->input('nik');
        $desa = $request->input('desa');
        $rt = $request->input('rt');
        $rw = $request->input('rw');
        $norumah = $request->input('norumah');
        $nohp = $request->input('nohp');
        $password = $request->input('password');
        $role_id = $request->input('role_id');

        $user = new Users([
            'nama' => $nama,
            'nik' => $nik,
            'desa' => $desa,
            'rt' => $rt,
            'rw' => $rw,
            'norumah' => $norumah,
            'nohp' => $nohp,
            'password' => bcrypt($password),
            'role_id' => $role_id
        ]);

        if ($user->save()) {
            $user->signin = [
                'href' => 'api/',
                'method' => 'POST',
                'params' => 'nik', 'password'
            ];
            $response = [
                'msg' => 'User Created !',
                'user' => $user
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg' => 'An error occured!'
        ];
        return response()->json($response, 404);
    }


    public function signin(Request $request)
    {
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
    }
}
