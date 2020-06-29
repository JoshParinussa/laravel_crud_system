<?php

namespace App\Http\Controllers;

use App\Sidi;
use App\Jemaat;
use Illuminate\Http\Request;

class SidiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidis = Sidi::latest()->paginate(5);
        return view('sidi.list', compact('sidis'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jemaats = Jemaat::all();
        return view('sidi.create', ['jemaats' => $jemaats]);
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
            'tgl_sidi' => 'required',
            'jemaat_id' => 'required',
            'status' => 'required',
        ]);

        Sidi::create($request->all());

        return redirect()->route('sidi.index')
                        ->with('success','Jadwal Sidi baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sidi  $sidi
     * @return \Illuminate\Http\Response
     */
    public function show(Sidi $sidi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sidi  $sidi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sidi $sidi)
    {
        $jemaats = Jemaat::all();
        return view('sidi.edit',compact('sidi'), ['jemaats' => $jemaats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sidi  $sidi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sidi $sidi)
    {
        $request->validate([
            'tgl_sidi' => 'required',
            'jemaat_id' => 'required',
            'status' => 'required',
        ]);
  
        $sidi->update($request->all());
  
        return redirect()->route('sidi.index')
                        ->with('success','Jadwal sidi berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sidi  $sidi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sidi $sidi)
    {
        $sidi->delete();
  
        return redirect()->route('sidi.index')
                        ->with('success','Jadwal sidi berhasil dihapus');
    }
}
