<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\Vaksinasi;
use Illuminate\Http\Request;

class SearchByCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function getByNIK(Request $request)
    {
        $nik = $request->nik;
        $pdd = Penduduk::where('nik', $nik)->get();
        if ($pdd->isEmpty()) {
            return 0;
        } else {
            $vaksinasi = Vaksinasi::where('id_penduduk', $pdd[0]->id)->get();
            // $output = [];
            // foreach ($vaksinasi as  $va) {
            //     $output[] .= (object)[
            //         'nama' => $va->id,
            //     ];
            // }
            return $vaksinasi;
        }
    }

    public function getByKK(Request $request)
    {
        //
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
