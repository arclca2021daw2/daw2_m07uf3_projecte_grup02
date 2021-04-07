<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socis;
use DB;
class socisctl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socis = DB::select('select * from socis');
        //return view('socis.mostraSocis',['socis'=>$socis]);
        //return view('socis.esborraSocis',['socis'=>$socis]);
        return view('socis.seleccionaSocisPerModificacio',['socis'=>$socis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socis.afegeixSocis');
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
            'NIF'   => 'required',
            'nom_cognoms'   => 'required',
            'adresa'    => 'required',
            'poblacio'  => 'required',
            'comarca'   => 'required',
            'tel_fixe'  => 'required',
            'tel_mobil' => 'required',
            'email'     => 'required',
            'data_alta' => 'required',
            'quota_mensual' => 'required',
            'aportacio_anual' => 'required'

        ]);

        $nouSocis = new Socis([

            'NIF'   => $request->get('NIF'),
            'nom_cognoms'   =>  $request->get('nom_cognoms'),
            'adresa'    =>  $request->get('adresa'),
            'poblacio'  =>  $request->get('poblacio'),
            'comarca'   =>   $request->get('comarca'),
            'tel_fixe'  =>   $request->get('tel_fixe'),
            'tel_mobil' =>  $request->get('tel_mobil'),
            'email'     =>  $request->get('email'),
            'data_alta' =>  $request->get('data_alta'),
            'quota_mensual' =>  $request->get('quota_mensual'),
            'aportacio_anual' =>    $request->get('aportacio_anual'),
        ]);
        $nouSocis->save();
        return redirect()->route('socis.create')->with('Exit', 'Dades afegides');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($NIF)
    {
        $socis = DB::select('select * from socis where NIF = ?', [$NIF]);
        return view('socis.dadesModificacioSocis',['socis'=>$socis]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$NIF)
    {
        $nom_cognoms = $request->input('nom_cognoms');
        $adresa = $request->input('adresa');
        $poblacio = $request->input('poblacio');
        $comarca = $request->input('comarca');
        $tel_fixe = $request->input('tel_fixe');
        $tel_mobil = $request->input('tel_mobil');
        $email = $request->input('email');
        $data_alta = $request->input('data_alta');
        $quota_mensual = $request->input('quota_mensual');
        $aportacio_anual = $request->input('aportacio_anual');
        DB::update('update socis set nom_cognoms = ?, adresa = ?, poblacio = ?, comarca = ?, tel_fixe = ?, tel_mobil = ?, email = ?, data_alta = ?, quota_mensual = ?, aportacio_anual = ? where NIF = ?',[$nom_cognoms,$adresa,$poblacio,$comarca,$tel_fixe,$tel_mobil,$email,$data_alta,$quota_mensual,$aportacio_anual,$NIF]);
        echo "Dades actualitzades";
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
    public function destroy($NIF)
    {
        DB::select('delete from socis where NIF = ?', [$NIF]);
        echo "Registre esborrat"; 
    }
}
