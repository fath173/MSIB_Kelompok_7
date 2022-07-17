<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use App\Models\Vaksinasi;
use Illuminate\Http\Request;

class SearchBy extends Controller
{

    public function getByNIK(Request $request)
    {
        $nik = $request->nik;
        $pdd = Penduduk::where('nik', $nik)->get();
        if ($pdd->isEmpty()) {
            return 0;
        } else {
            $vaksinasi = Vaksinasi::where('id_penduduk', $pdd[0]->id)->orderBy('id', 'desc')->get();

            $output = [];
            foreach ($vaksinasi as  $va) {
                $output[] = [
                    'id_vaksinasi' => $va->id,
                    'nama' => $va->pendudukFk->nama,
                    'status' => $va->pendudukFk->status,
                    'jenis_vaksin' => $va->jenisVaksinFk->nama_vaksin,
                    'dosis' => $va->dosisFk->nama_dosis,
                    'tanggal' => $va->tgl_vaksin,
                    'keterangan' => $va->keterangan,
                ];
            }

            if ($output != null) {
                return response()->json([
                    'data' => $output,
                ], 200);
            } else {
                return response()->json([
                    'data' => 'Tidak Ada Data',
                ], 404);
            }
        }
    }

    public function getByKK(Request $request)
    {
        $kk = $request->kk;
        $dataKk = KartuKeluarga::where('no_kk', $kk)->get();

        if ($dataKk->isEmpty()) {
            return 0;
        } else {
            $pdd = Penduduk::where('id_kk', $dataKk[0]->id)->get();
            $idPdd = [];
            foreach ($pdd as $p) {
                $idPdd[] .= $p->id;
            }

            $vaksinasi = Vaksinasi::whereIn('id_penduduk', $idPdd)->orderBy('id', 'desc')->get();
            $output = [];
            foreach ($vaksinasi as  $va) {
                $output[] = [
                    'id_vaksinasi' => $va->id,
                    'nama' => $va->pendudukFk->nama,
                    'status' => $va->pendudukFk->status,
                    'jenis_vaksin' => $va->jenisVaksinFk->nama_vaksin,
                    'dosis' => $va->dosisFk->nama_dosis,
                    'tanggal' => $va->tgl_vaksin,
                    'keterangan' => $va->keterangan,
                ];
            }

            if ($output != null) {
                return response()->json([
                    'data' => $output,
                ], 200);
            } else {
                return response()->json([
                    'data' => 'Tidak Ada Data',
                ], 404);
            }
        }
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
