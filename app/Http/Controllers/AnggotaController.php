<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = DB::table('anggota')->get();
        return view('perpustakaan.anggota.index', compact('anggota'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perpustakaan.anggota.anggota');
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
            'id'=>'required',
            'kode'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'jurusan'=>'required',
            'no_telp'=>'required',
            'alamat'=>'required',
        
        ]);

        $query=DB::table('anggota')->insert([
            'id'=>$request['id'],
            'kode_anggota'=>$request['kode'],
            'nama_anggota'=>$request['nama'],
            'jk_anggota'=>$request['jk'],
            'jurusan_anggota'=>$request['jurusan'],
            'no_telp_anggota'=>$request['no_telp'],
            'alamat_anggota'=>$request['alamat'],
        ]);

        return redirect('/anggota');
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