<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = UserModel::orderBy('id')->paginate(5);
        return view('backend.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'gender' => 'required',
            'password' => 'required'
        ]);

        $user = new UserModel;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telp= $request->no_telp;
        $user->gender = $request->gender;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('backend.user.index')->with('Sukses','User Berhasil Dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.user.show', compact('tps3r'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.user.edit', compact('user'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'gender' => 'required',
            'password' => 'required'
        ]);

        $user = UserModel::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telp= $request->no_telp;
        $user->gender = $request->gender;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('backend.user.index')->with('Sukses','User Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $user)
    {
        $user->delete();
        return redirect()->route('backend.user.index')->with('Sukses', 'User Berhasil Dihapus');
    }
}
