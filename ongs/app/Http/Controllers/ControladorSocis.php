<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socis;
use App\Models\SocisOngs;
class ControladorSocis extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Socis =Socis ::all();
        return view('indexSocis', compact('Socis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcomeSocis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouSocis = $request->validate([
            'NIF' => 'required|max:255',
            'nom_cognoms' => 'required|max:255',
            'adresa' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'comarca' => 'required|max:255',
            ]);
            $Socis = Empleat::create($nouSocis);
            return redirect('/Socis')->with('completed', 'Soci creat!');
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
