<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Vaksinasi;
use Illuminate\Http\Request;

class VaksinasiCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data[] = (object)[
            'id' => 1,
            'nama' => 'Jhony',
            'jenis_vaksin' => 'Moderna',
            'dosis' => '2',
            'tanggal_vaksin' => '1992-11-24',
            'Ket' => 'kepala keluarga',
        ];
        // dd($data);

        return view('content-admin.vaksinasi.vaksinasi', [
            'imp' => $data
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
     * @param  \App\Models\Vaksinasi  $vaksinasi
     * @return \Illuminate\Http\Response
     */
    public function show(Vaksinasi $vaksinasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaksinasi  $vaksinasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaksinasi $vaksinasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaksinasi  $vaksinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaksinasi $vaksinasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaksinasi  $vaksinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaksinasi $vaksinasi)
    {
        //
    }
}
