<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Kk;
use Illuminate\Http\Request;

class KkCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data[] = (object)[
            'id' => 1,
            'no_kk' => 123123123,

        ];
        // dd($data);

        return view('content-admin.kartuKeluarga.kk', [
            'u' => $data
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
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function show(Kk $kk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function edit(Kk $kk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kk $kk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kk $kk)
    {
        //
    }
}
