<?php

namespace App\Http\Controllers;
use App\Models\treballador_professionals;
use Illuminate\Http\Request;

class ControladorTreballador_professionals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treballador_professionals = treballador_professionals::all();
        return view('indextreballador_professional', compact('treballador_professionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcometreballador_professional');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noutreballador_professionals = $request->validate([
            'NIF' => 'required|max:255',
            'carrec' => 'required|max:255',
            'quantitat_SS' => 'required|max:255',
            'percentatge_irpf' => 'required|max:255',
            ]);
            $treballador_professionals = treballador_professionals::create($noutreballador_professionals);
            return redirect('/treballador_professionals')->with('completed', 'treballador professional creat!');
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
        $treballador_professionals = treballador_professionals::findOrFail($NIF);    
        return view('actualitzatreballador_professionals', compact('treballador_professionals'));
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
        $dades = $request->validate([    
            'NIF' => 'required|max:255',
            'carrec' => 'required|max:255',
            'quantitat_SS' => 'required|max:255',
            'percentatge_irpf' => 'required|max:255', 
                      ]); 
     treballador_professionals::whereId($NIF)->update($dades);   
      return redirect('/treballador_professionals')->with('completed', 'treballador professional actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIF)
    {
        $treballador_professionals = treballador_professionals::findOrFail($NIF);
        return view('indextreballadorprofessionals', compact('treballador_professionals'));
    }
}
