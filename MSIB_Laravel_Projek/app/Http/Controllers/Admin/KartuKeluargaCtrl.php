<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class KartuKeluargaCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKK = KartuKeluarga::orderBy('id', 'desc')->get();
        // dd($dataKK->pendudukFk);
        return view('content-admin.kartuKeluarga.kk', [
            'dataKK' => $dataKK
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
            'no_kk' => 'required',
        ]);

        $kk = KartuKeluarga::findOrFail($id);
        // dd($request);
        if ($request->foto) {
            $nameImage = microtime() . '.' . $request->foto->extension();
            $request->foto->move(public_path('files/foto-kk'), str_replace(' ', '', $nameImage));
            $kk->update([
                'no_kk' => $request->no_kk,
                'foto_kk' => str_replace(' ', '', $nameImage),
            ]);
        } else {
            $kk->update([
                'no_kk' => $request->no_kk,
            ]);
        }

        return redirect()->route('admin-kk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kk = KartuKeluarga::findOrFail($id);
        $kk->delete();

        return redirect()->route('admin-kk');
    }
}
