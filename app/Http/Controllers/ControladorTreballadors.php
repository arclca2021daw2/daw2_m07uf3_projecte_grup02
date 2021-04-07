<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Treballadors;

class ControladorTreballadors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treballadors = treballadors::all();
        return view('indextreballadors', compact('treballadors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcometreballador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouTreballador = $request->validate([
            'NIF' => 'required|max:255',
            'nom_cognoms' => 'required|max:255',
            'adresa' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'tel_fixe' => 'required|max:255',
            'tel_mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'data_ingres' => 'required|max:255',
            'CIF_ong' => 'required|max:255',
            ]);
        $treballador = treballadors::create($nouTreballador);
        return redirect('/treballadors')->with('completed', 'Treballador creat!');
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
    public function edit($NIF)
    {
        $treballador = treballadors::findOrFail($NIF); 
           return view('actualitzatreballadors', compact('treballador'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NIF)
    {
        $dades = $request->validate([ 

            'NIF' => 'required|max:255',
            'nom_cognoms' => 'required|max:255',
            'adresa' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'tel_fixe' => 'required|max:255',
            'tel_mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'data_ingres' => 'required|max:255',
            'CIF_ong' => 'required|max:255',    
          ]);   
           treballadors::whereId($NIF)->update($dades); 
       return redirect('/treballadors')->with('completed', 'Treballador actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIF)
    {
        $treballadors = treballadors::findOrFail($NIF);
        return view('indextreballadors', compact('treballadors'));
    }
}
