<?php

namespace App\Http\Controllers;

use App\Jabatan;
use App\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jemaats = Jemaat::latest()->paginate(5);
        return view('jemaat.list', compact('jemaats'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jemaat = new Jemaat;
        $jabatans = Jabatan::all();
        return view('jemaat.create', ['jabatans' => $jabatans]);
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
            'email' => 'required',
            'jk' => 'required',
        ]);

        Jemaat::create($request->all());

        return redirect()->route('jemaats.index')
                        ->with('success','Jemaat baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function show(Jemaat $jemaat)
    {
        $jabatans = Jabatan::all();
        return view('jemaat.show',compact('jemaat'), ['jabatans' => $jabatans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function edit(Jemaat $jemaat)
    {
        $jabatans = Jabatan::all();
        return view('jemaat.edit',compact('jemaat'), ['jabatans' => $jabatans]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jemaat $jemaat)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'jk' => 'required',
        ]);
  
        $jemaat->update($request->all());
  
        return redirect()->route('jemaats.index')
                        ->with('success','Jemaat updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jemaat $jemaat)
    {
        $jemaat->delete();
  
        return redirect()->route('jemaats.index')
                        ->with('success','Jemaat berhasil dihapus');
    }
}
