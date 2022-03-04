<?php

namespace App\Http\Controllers;

use App\Model\Role;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role = Role::all();

        return response()->json([
            'status' => 'success',
            'message' => 'list data jawaban iks',
            'data' => $role
        ]);
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
            'role_name' => 'required'
        ]);

        $role = $request->input('role_name');

        $role = new Role([
            'role_name' => $role
        ]);
        $role->save();

        return response()->json([
            'status' => 'success',
            'message' => 'input data role iks',
            'jawaban' => $role
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
        //
        $role = Role::make($request->all(), [
            'role_name' => 'required',

        ]);

        $role = Role::find($id);
        $role->update([
            'role_name' => $request->input('role_name'),
        ]);
        $role->save();

        if ($role) {
            return response()->json([
                'success' => true,
                'message' => 'Role Berhasil Diupdate!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Role Gagal Diupdate!',
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
        $role = Role::findOrFail($id);
        $role->delete();

        if ($role) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Dihapus!',
            ], 400);
        }
    }
}
