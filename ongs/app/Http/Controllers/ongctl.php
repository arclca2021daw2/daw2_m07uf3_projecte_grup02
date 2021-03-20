<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ong;

class ongctl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ong.afegirOng');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cif' => 'required',
            'nom' => 'required',
            'adresa' => 'required',
            'poblacio' => 'required',
            'comarca' => 'required',
            'tipus' => 'required',
            'utilitat_publica' => 'required'
        ]);
        /*$ut;
        if ($request->get('utilitat_publica') == 'on') {
            $ut = true; 
        } else {
            $ut = false;
        }*/
        $novaong = new Ong([
            'cif' => $request->get('cif'),
            'nom' => $request->get('nom'),
            'adresa' => $request->get('adresa'),
            'poblacio' => $request->get('poblacio'),
            'comarca' => $request->get('comarca'),
            'tipus' => $request->get('tipus'),
            'utilitat_publica' => $request->get('utilitat_publica', 0),
        ]);
        $novaong->save();
        return redirect()->route('ong.create')->with('Exit', 'Ong afegida');
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
