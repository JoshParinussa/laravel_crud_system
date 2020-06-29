<?php

namespace App\Http\Controllers;

use App\Jemaat;
use App\JemaatPernikahan;
use Illuminate\Http\Request;

class JemaatPernikahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pernikahans = JemaatPernikahan::latest()->paginate(5);
        return view('pernikahan.list', compact('pernikahans'))
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
        return view('pernikahan.create', ['jemaats' => $jemaats]);
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
            'suami_jemaat_id' => 'required',
            'istri_jemaat_id' => 'required',
            'tgl_pernikahan' => 'required',
            'pendeta_jemaat_id' => 'required',
            'saksi_1' => 'required',
            'saksi_2' => 'required',
        ]);

        JemaatPernikahan::create($request->except('_token'));

        return redirect()->route('pernikahan.index')
                        ->with('success','Data Pernikahan baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JemaatPernikahan  $jemaatPernikahan
     * @return \Illuminate\Http\Response
     */
    public function show(JemaatPernikahan $jemaatPernikahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JemaatPernikahan  $jemaatPernikahan
     * @return \Illuminate\Http\Response
     */
    public function edit(JemaatPernikahan $pernikahan)
    {
        $jemaats = Jemaat::all();
        return view('pernikahan.edit',compact('pernikahan'), ['jemaats' => $jemaats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JemaatPernikahan  $jemaatPernikahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JemaatPernikahan $pernikahan)
    {
        $request->validate([
            'suami_jemaat_id' => 'required',
            'istri_jemaat_id' => 'required',
            'tgl_pernikahan' => 'required',
            'pendeta_jemaat_id' => 'required',
            'saksi_1' => 'required',
            'saksi_2' => 'required',
        ]);
        
        $pernikahan->update($request->all());
        return redirect()->route('pernikahan.index')
                        ->with('success','Data pernikahan berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JemaatPernikahan  $jemaatPernikahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JemaatPernikahan $pernikahan)
    {
        $pernikahan->delete();
        return redirect()->route('pernikahan.index')
                        ->with('success','Data pernikahan berhasil dihapus');
    }
}
