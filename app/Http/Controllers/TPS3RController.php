<?php

namespace App\Http\Controllers;

use App\Models\TPS3RModel;
use Illuminate\Http\Request;

class TPS3RController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tps3r = TPS3RModel::all();
        // return response()->json(['data' => $tps3r]);

        $data['tps3r'] = TPS3RModel::orderBy('id')->paginate(5);
        return view('backend.tps3r.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tps3r.create');
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
            'tps3r_name' => 'required',
            'phone_number' => 'required',
            'daily_open' => 'required',
            'number_of_employees' => 'required',
        ]);

        $tps3r = new TPS3RModel;
        $tps3r->tps3r_name = $request->tps3r_name;
        $tps3r->phone_number = $request->phone_number;
        $tps3r->daily_open = $request->daily_open;
        $tps3r->number_of_employees = $request->number_of_employees;
        $tps3r->save();

        return redirect()->route('backend.tps3r.index')->with('Sukses','TPS3R Berhasil Dibuat.');
    }        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TPS3RModel $tps3r)
    {
        return view('backend.tps3r.show', compact('tps3r'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TPS3RModel $tps3r)
    {
        return view('backend.tps3r.edit', compact('tps3r'));
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
            'tps3r_name' => 'required',
            'phone_number' => 'required',
            'daily_open' => 'required',
            'number_of_employees' => 'required',
        ]);

        $tps3r = TPS3RModel::find($id);
        $tps3r->tps3r_name = $request->tps3r_name;
        $tps3r->phone_number = $request->phone_number;
        $tps3r->daily_open = $request->daily_open;
        $tps3r->number_of_employees = $request->number_of_employees;
        $tps3r->save();

        return redirect()->route('backend.tps3r.index')->with('Sukses','TPS3R Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TPS3RModel $tps3r)
    {
        $tps3r->delete();
        return redirect()->route('backend.tps3r.index')->with('Sukses', 'TPS3R Berhasil Dihapus');
    }
}
