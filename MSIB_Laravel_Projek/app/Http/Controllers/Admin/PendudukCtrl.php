<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penduduk::orderBy('id', 'desc')->get();
        // dd($data);

        return view('content-admin.penduduk.penduduk', [
            'penduduk' => $data
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
        $request->validate([
            'no_kk' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'alamat' => 'required',
        ]);

        $kk = KartuKeluarga::where('no_kk', $request->no_kk)->get();

        if ($request->status == 'kepala keluarga') {
            if (!empty($kk[0])) {
                return redirect()->route('admin-penduduk')
                    ->with('warning', 'Kepala Keluarga dengan No KK tersebut sudah ada');
            } else {
                $idKK = KartuKeluarga::insertGetId([
                    'no_kk' => $request->no_kk,
                ]);

                Penduduk::create([
                    'id_kk' => $idKK,
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'gender' => $request->gender,
                    'status' => $request->status,
                    'alamat' => $request->alamat,
                ]);
                return redirect()->route('admin-penduduk')
                    ->with('success', 'Data Penduduk Berhasil Tersimpan.');
            }
        } else {
            if (!empty($kk[0])) {
                Penduduk::create([
                    'id_kk' => $kk[0]->id,
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'gender' => $request->gender,
                    'status' => $request->status,
                    'alamat' => $request->alamat,
                ]);
                return redirect()->route('admin-penduduk')
                    ->with('success', 'Data Penduduk Berhasil Tersimpan.');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_kk' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'alamat' => 'required',
        ]);

        try {
            $kk = KartuKeluarga::where('no_kk', $request->no_kk)->get();
            $pdd = Penduduk::findOrFail($id);
            $pdd->update([
                'id_kk' => $kk[0]->id,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'gender' => $request->gender,
                'status' => $request->status,
                'alamat' => $request->alamat,
            ]);
            return redirect()->route('admin-penduduk')
                ->with('success', 'Data Penduduk Berhasil Tersimpan.');
        } catch (\Throwable $th) {
            return redirect()->route('admin-penduduk')
                ->with('warning', 'Gagal Update Data Penduduk');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $pdd = Penduduk::findOrFail($id);
            $pdd->delete();
            return redirect()->route('admin-penduduk')
                ->with('success', 'Data Penduduk Telah Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('admin-penduduk')
                ->with('warning', 'Gagal Hapus Penduduk');
        }
    }
}
