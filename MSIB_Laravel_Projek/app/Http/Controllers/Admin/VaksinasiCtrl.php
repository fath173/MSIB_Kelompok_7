<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jenis_Vaksin;
use App\Models\Penduduk;
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
        $data = Vaksinasi::orderBy('id', 'desc')->get();
        $jenisVaksin = Jenis_Vaksin::all();

        return view('content-admin.vaksinasi.vaksinasi', [
            'data_vaksinasi' => $data,
            'dataVaksin' => $jenisVaksin,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'jenis_vaksin' => 'required',
            'tgl_vaksin' => 'required',
            'dosis' => 'required',
            'keterangan' => 'required',
        ]);

        $pdd = Penduduk::where('nik', $request->nik)->get();
        // dd($pdd[0]->id);
        Vaksinasi::create([
            'id_penduduk' => $pdd[0]->id,
            'id_vaksin' => $request->jenis_vaksin,
            'tgl_vaksin' => $request->tgl_vaksin,
            'dosis' => $request->dosis,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin-vaksinasi')
            ->with('success', 'Data jenis vaksin Berhasil Tersimpan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'jenis_vaksin' => 'required',
            'tgl_vaksin' => 'required',
            'dosis' => 'required',
            'keterangan' => 'required',
        ]);

        $pdd = Penduduk::where('nik', $request->nik)->get();

        $va = Vaksinasi::findOrFail($id);
        $va->update([
            'id_penduduk' => $pdd[0]->id,
            'id_vaksin' => $request->jenis_vaksin,
            'tgl_vaksin' => $request->tgl_vaksin,
            'dosis' => $request->dosis,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin-vaksinasi')
            ->with('success', 'Data jenis vaksin Berhasil Tersimpan.');
    }

    public function destroy($id)
    {
        $va = Vaksinasi::findOrFail($id);
        $va->delete();
        return redirect()->route('admin-vaksinasi')
            ->with('success', 'Data jenis vaksin Berhasil Tersimpan.');
    }

    public function getJenisVaksin(Request $request)
    {
        $nik = $request->nik;
        $pdd = Penduduk::where('nik', $nik)->get();
        if ($pdd->isEmpty()) {
            return 0;
        } else {
            $va = Vaksinasi::where('id_penduduk', $pdd[0]->id)->get();

            $output = ' <option value="0">Tidak Vaksin</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>';
            return $output;
        }
    }
}
