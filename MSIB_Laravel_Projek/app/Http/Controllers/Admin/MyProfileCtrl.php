<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MyProfileCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth()->id();
        $user = User::find($id);
        // dd($user);
        return view('content-admin.profile.profile', [
            'data' => $user
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
            'name' => 'required',
            'email' => 'required',
        ]);

        $mhs = User::findOrFail($id);
        // dd($request);
        if ($request->foto) {
            $nameImage = date('YmdHis') . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('files/foto-profile'), $nameImage);
            $mhs->update([
                'name' => $request->name,
                'email' => $request->email,
                'foto' => $nameImage,
            ]);
        } else {
            $mhs->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('admin-profile');
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'password_old' => 'required|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8',
        ]);

        $mhs = User::findOrFail($id);
        if (Hash::check($request->password_old, $mhs->password)) {
            $mhs->update([
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->route('admin-profile')->with('success', 'Password Baru Berhasil Tersimpan.');
        } else {
            return redirect()->route('admin-profile')->with('error', 'Password Lama Salah!');
        }
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
