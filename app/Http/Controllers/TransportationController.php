<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportationModel;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['transportation'] = TransportationModel::orderBy('id')->paginate(5);
        return view('backend.transportation.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.transportation.create');
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
            'transportation_name' => 'required',
        ]);

        $user = new TransportationModel;
        $user->transportation_name = $request->transportation_name;
        $user->save();

        return redirect()->route('backend.transportation.index')->with('Sukses','Transportation Berhasil Dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.transportation.show', compact('transportation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.transportation.edit', compact('transportation'));
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
            'transportation_name' => 'required',
        ]);

        $user = TransportationModel::find($id);
        $user->transportation_name = $request->transportation_name;
        $user->save();

        return redirect()->route('backend.user.index')->with('Sukses','Transportation Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransportationModel $transportation)
    {
        $transportation->delete();
        return redirect()->route('backend.transportation.index')->with('Sukses', 'Transportation Berhasil Dihapus');
    }
}
