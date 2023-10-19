<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $raks = DB::table('raks')->get();
        return view('rak.index', compact('raks'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
        ]);

        $query = DB::table('raks')->insert([
            'nama_rak' => $request['nama_rak'],
            'lokasi_rak' => $request['lokasi_rak'],
        ]);

        return redirect('/rak');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $raks = DB::table('raks')->where('id', $id)->get();
        return view('rak.edit', compact('raks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
        ]);

        $query = DB::table('raks')->where('id', $id)->update([
            'nama_rak' => $request['nama_rak'],
            'lokasi_rak' => $request['lokasi_rak'],
        ]);

        return redirect()->route('rak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('raks')->where('id', $id)->delete();
        return redirect()->route('rak.index');
    }
}