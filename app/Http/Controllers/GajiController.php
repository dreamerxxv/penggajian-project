<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Gaji.index', [
            'gaji' => Gaji::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Gaji.create');
    }

    // public function edit()
    // {
    //     return view('Gaji.edit');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Gaji $gaji)
    {
        $data_gaji = $request->validate([
            'karyawan'        => 'required',
            'jumlah_lembur'   => 'required',
            'pajak'           => 'required',
            'total_tunjangan' => 'required',
            'gaji_bersih'     => 'required',
            'gaji_kotor'      => 'required',
            'bulan'           => 'required',
            'tahun'           => 'required',
            'id_karyawan'     => 'required'
        ]);

        Gaji::create($data_gaji);
        return redirect('/gaji/index')->with('success', 'Data Guru Berhasil Ditambah');
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
    public function edit(Gaji $gaji)
    {
        return view('gaji.edit', [
            'gaji' => $gaji
        ]);
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
        $data_gaji = $request->validate([
            'gaji_kotor'      => 'required|numeric',
            'karyawan'        => 'required',
            'jumlah_lembur'   => 'required',
            'pajak'           => 'required',
            'total_tunjangan' => 'required',
            'gaji_bersih'     => 'required',
            'bulan'           => 'required',
            'tahun'           => 'required',
            'id_karyawan'     => 'required'
        ]);

        Gaji::update($data_gaji);
        return redirect('/gaji/index')->with('success', 'Data Guru Berhasil Ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji->delete();

        return redirect('/gaji/index')->with('success', 'Data guru berhasil dihapus');
    }
}
