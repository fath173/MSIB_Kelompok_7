<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PetugasCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('id', 'desc')->get();
        // dd($data);

        return view('content-admin.petugas.petugas', ['petugas' => $data]);
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
            'name' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8',
        ]);

        User::create([
            'name' => $request['name'],
            'gender' => $request['gender'],
            'role' => $request['role'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('admin-petugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $petugas = User::findOrFail($id);

        if ($request->foto) {
            $gambar = md5($request->foto . microtime() . '.' . $request->foto->extension());
            $request->foto->move(public_path('files/foto-profile'), $gambar);
            $petugas->update([
                'name' => $request->name,
                'gender' => $request->gender,
                'role' => $request->role,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'foto' => $gambar,
            ]);
        } else {
            $petugas->update([
                'name' => $request->name,
                'gender' => $request->gender,
                'role' => $request->role,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('admin-petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $petugas = User::findOrFail($id);
        $petugas->delete();

        return redirect()->route('admin-petugas');
    }
}
