<?php

namespace App\Http\Controllers;
use App\Models\treballadors_voluntaris;
use Illuminate\Http\Request;

class ControladorTreballadors_Voluntaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treballadors_voluntaris = treballadors_voluntaris::all();
        return view('indextreballadors_voluntaris', compact('treballadors_voluntaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcometreballadors_voluntaris');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouTreballador_voluntari = $request->validate([
            'NIF' => 'required|max:255',
            'edat' => 'required|max:255',
            'professio' => 'required|max:255',
            'hores' => 'required|max:255',
            ]);
            $treballadors_voluntaris = treballadors_voluntaris::create($nouTreballador_voluntari);
            return redirect('/treballadors_voluntaris')->with('completed', 'treballador voluntari creat!');
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
        $treballadors_voluntaris = treballadors_voluntaris::findOrFail($NIF);   
         return view('actualitzatreballadors_voluntaris', compact('treballadors_voluntaris'));
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
                'edat' => 'required|max:255',
                'professio' => 'required|max:255',
                'hores' => 'required|max:255',
                                  ]);   
         treballadors_voluntaris::whereNif($NIF)->update($dades);  
          return redirect('/treballadors_voluntaris')->with('completed', 'Treballador actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIF)
    {
        $treballadors_voluntaris = treballadors_voluntaris::findOrFail($NIF);
        return view('indextreballadors_voluntaris', compact('treballadors_voluntaris'));
    }
}
