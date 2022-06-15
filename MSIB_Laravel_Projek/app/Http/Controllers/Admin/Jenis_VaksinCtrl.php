<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jenis_Vaksin;

class Jenis_VaksinCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_vaksin = Jenis_Vaksin::latest()->get();

        return view('content-admin.jenisVaksin.jenis-vaksin',compact('jenis_vaksin'));
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
            'nama' => 'required',
        ]);
    
        Jenis_Vaksin::create($request->all());
     
        return redirect()->route('admin-jenis-vaksin')
                        ->with('success','Data jenis vaksin Berhasil Tersimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis_Vaksin  $jenis_Vaksin
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis_Vaksin $jenis_Vaksin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis_Vaksin  $jenis_Vaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        
        $jenis_vaksin = Jenis_Vaksin::findOrFail($id);
        $jenis_vaksin->update([
            'nama' => $request->nama,
        ]);

        // $jenis_Vaksin::update($request->all());
     
        return redirect()->route('admin-jenis-vaksin')
                        ->with('success','Data jenis vaksin Berhasil Terupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis_Vaksin  $jenis_Vaksin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $jenis_Vaksin = Jenis_Vaksin::findOrFail($id);
        $jenis_Vaksin->delete();
    
        return redirect()->route('admin-jenis-vaksin')
                        ->with('success','Data jenis vaksin Berhasil Terhapus');
    }
}