<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosis;
use Illuminate\Http\Request;

class DosisCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosis = Dosis::orderBy('id', 'desc')->get();

        return view('content-admin.dosis.dosis', compact('dosis'));
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
        $request->validate([
            'nama_dosis' => 'required',
        ]);

        Dosis::create($request->all());

        return redirect()->route('admin-dosis')
            ->with('success', 'Data Dosis Berhasil Tersimpan.');
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
        $request->validate([
            'nama_dosis' => 'required',
        ]);

        $jenis_vaksin = Dosis::findOrFail($id);
        $jenis_vaksin->update([
            'nama_dosis' => $request->nama_dosis,
        ]);

        // $jenis_Vaksin::update($request->all());

        return redirect()->route('admin-dosis')
            ->with('success', 'Data Dosis Berhasil Terupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosis = Dosis::findOrFail($id);
        $dosis->delete();

        return redirect()->route('admin-dosis')
            ->with('success', 'Data Dosis Berhasil Terhapus');
    }
}
