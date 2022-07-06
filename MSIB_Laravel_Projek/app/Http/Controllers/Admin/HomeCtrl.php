<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\Jenis_Vaksin;
use App\Models\User;
use App\Models\Vaksinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = "INI HOME ADMIN";

        $jmlPenduduk = Penduduk::select('*')->count();
        $jmlJenisVaksin = Jenis_Vaksin::select('*')->count();
        $jmlPetugas = User::select('*')->count();
        $jmlVaksinasi = Vaksinasi::select('*')->count();

        return view('content-admin.home.home', [
            // 'data' => $data
            'penduduk' => $jmlPenduduk,
            'jenisVaksin' => $jmlJenisVaksin,
            'petugas' => $jmlPetugas,
            'vaksinasi' => $jmlVaksinasi
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
