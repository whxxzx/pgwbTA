<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\tabelmaster;
use App\Models\ekstrakulikuler;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function welcome()
    {
        $daftar_siswa = tabelmaster::select()->where('ekstrakulikuler_id','1')->get();
        $daftar_ekskul = ekstrakulikuler::all();
        $daftar_kelas= kelas::all();
        // $dance = tabelmaster::where('ekstrakulikuler_id','1');
        return view('/' , compact('daftar_ekskul', 'daftar_kelas', 'daftar_siswa'));
    }

   
    public function index()
    {
        $daftar_siswa = tabelmaster::select()->where('ekstrakulikuler_id','1')->get();
        $daftar_ekskul = ekstrakulikuler::all();
        $daftar_kelas= kelas::all();
        // $dance = tabelmaster::where('ekstrakulikuler_id','1');
        return view('admindance' , compact('daftar_ekskul', 'daftar_kelas', 'daftar_siswa'));
    }

    public function futsal()
    {
        $daftar_siswa = tabelmaster::select()->where('ekstrakulikuler_id','2')->get();
        $daftar_ekskul = ekstrakulikuler::all();
        $daftar_kelas= kelas::all();
        // $dance = tabelmaster::where('ekstrakulikuler_id','1');
        return view('adminfutsal' , compact('daftar_ekskul', 'daftar_kelas', 'daftar_siswa'));
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