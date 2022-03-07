<?php

namespace App\Http\Controllers;

use App\Model\User;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


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
        $user = User::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data user',
            'data' => $user
        ]);
    }


    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'nik' =>  'required',
                'rt' => 'required',
                'rw' => 'required',
                'norumah' => 'required',
                'nohp' => 'required',
                'nowa' => 'required',
                'password' => 'required|min:6',
                'status' => 'required',
                'role_id' => 'required',
                'desa_id' => 'required'
            ]);

            if ($validator->fails()) {
                $error = $validator->errors()->all()[0];
                return response()->json(['status' => false, 'message' => $error, 'data' => []], 422);
            } else {
                $user = new User();
                $user->nama = $request->nama;
                $user->nik = $request->nik;
                $user->rt = $request->rt;
                $user->rw = $request->rw;
                $user->norumah = $request->norumah;
                $user->nohp = $request->nohp;
                $user->nowa = $request->nowa;
                $user->password = Hash::make($request->password, ['rounds' => 12]);
                $user->status = $request->status;
                $user->role_id = $request->role_id;
                $user->desa_id = $request->desa_id;
                $user->save();
                return response()->json(['status' => true, 'message' => 'Profile Created!', 'data' => $user], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage(), 'data' => []], 500);
        }
    }

    public function login(Request $request, User $user)
    {

        $password = $request->password;
        $row = User::Where('nik', $request->nik)->first();
        if (!$row) {
            $data = [
                'status' => false,
                'message' => 'Unregistered username!',
            ];
            return response()->json($data, 401);
        } else {
            if (!Hash::check($password, optional($row)->password)) {
                $data = [
                    'status' => false,
                    'message' => 'Wrong Password!',
                ];
                return response()->json($data, 401);
            } else {
                $data = [
                    'status' => true,
                    'message' => 'Login Success!',
                    'data' =>
                    [
                        'id' => $row->id,
                        "nama" => $row->nama,
                        "nik" => $row->nik,
                        "rt" => $row->rt,
                        "rw" => $row->rw,
                        "norumah" => $row->norumah,
                        "nohp" => $row->nohp,
                        "nowa" => $row->nowa,
                        "password" => $row->password,
                        "status" => $row->status,
                        "role_id" => $row->role_id,
                        "desa_id" => $row->desa_id,

                    ],
                ];
                return response()->json($data, 200);
            }
        }
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
            'rt' => 'required',
            'rw' => 'required',
            'norumah' => 'required',
            'nohp' => 'required',
            'nowa' => 'required',
            'password' => 'required|min:6',
            'role_id' => 'required',
            'desa_id' => 'required'
        ]);

        $nama = $request->input('nama');
        $nik = $request->input('nik');
        $rt = $request->input('rt');
        $rw = $request->input('rw');
        $norumah = $request->input('norumah');
        $nohp = $request->input('nohp');
        $nowa = $request->input('nowa');
        $password = $request->input('password');
        $role_id = $request->input('role_id');
        $desa_id = $request->input('desa_id');

        $user = new User([
            'nama' => $nama,
            'nik' => $nik,
            'rt' => $rt,
            'rw' => $rw,
            'norumah' => $norumah,
            'nohp' => $nohp,
            'nowa' => $nowa,
            'password' => bcrypt($password),
            'role_id' => $role_id,
            'desa_id' => $desa_id,
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
