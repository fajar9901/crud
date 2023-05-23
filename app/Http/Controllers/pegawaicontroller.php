<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pegawai;
use App\Http\Controllers\pegawaicontroller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $pegawais = DB::table('pegawais')->getAll();
        $pegawais = Pegawai::all();
        //Var_dump($pegawais);
        //die();
        return view('pegawai.data_pegawai',['pegawais' => $pegawais]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pegawai.tambahdata');
    }
    public function simpan(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->nama = $request->input('nama');
        $pegawai->tgllahir = $request->input('tgllahir');
        $pegawai->alamat = $request->input('alamat');
        $pegawai->save();
    
        return redirect('/data_pegawai')->with('sukses', 'Data berhasil disimpan');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id, Request $request)
    {
    //Var_dump();
   // die();
    $data = Pegawai::findOrFail($id);
    $data->nama = $request->input('nama');
    $data->tgllahir = $request->input('tgllahir');
    $data->alamat = $request->input('alamat');
    //$data->updated_at = Carbon::now();
    $data->save();
    return redirect()->route('data_pegawai')->with('success', 'Data berhasil dihapus');
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
        $data = Pegawai:: findOrFail($id);
        //Var_dump($data); die();
        return view('pegawai.editdata', compact('data'));
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
    $data = Pegawai::findOrFail($id);
    $data->nama = $request->input('nama');
    $data->tgllahir = $request->input('tgllahir');
    $data->alamat = $request->input('alamat');
    $data->save();
    return redirect()->route('data_pegawai')->with('success', 'Data berhasil diupdate');

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
