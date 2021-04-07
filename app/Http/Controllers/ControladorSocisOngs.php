<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\socis_ongs;

class ControladorSocisOngs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socis_ongs = socis_ongs::all();
        return view('indexsocisongs', compact('socis_ongs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcomesocisongs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nou_soci_ong = $request->validate([
            'CIF_ONG' => 'required|max:255',
            'NIF_soci' => 'required|max:255',
            ]);
            $socis_ongs = socis_ongs::create($nou_soci_ong);return redirect('/socis_ongs')->with('completed', 'Soci Ong creat!');
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
    public function edit($CIF_ONG)
    {
        $socis_ongs = socis_ongs::findOrFail($CIF_ONG); 
         return view('actualitzasocisongs', compact('socis_ongs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $CIF_ONG
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $CIF_ONG)
    {
        $dades = $request->validate([ 
            'CIF_ONG' => 'required|max:255',        
            'NIF_soci' => 'required|max:255',   
            ]);
            socis_ongs::whereCif_ong($CIF_ONG)->update($dades);    
        return redirect('/socis_ongs')->with('completed', 'Soci Ong actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($CIF_ONG)
    {
        $socis_ongs = socis_ongs::findOrFail($CIF_ONG);return view('indexsocisongs', compact('socis_ongs'));
    }
}
