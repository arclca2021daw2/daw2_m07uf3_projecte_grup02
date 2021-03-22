<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ongs;
use DB;
class ongsctl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ongs= DB::select('select * from ongs');
        return view('ongs.seleccionaOngsPerModificacio',['ongs'=>$ongs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('ongs.afegeixOngs');
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
            'CIF'   =>  'required',
            'nom'   =>  'required',
            'adresa'    =>  'required',
            'poblacio'  =>  'required',
            'comarca'   =>  'required',
            'tipus'     =>  'required',
            ]);
        $ut = false;
        if ($request->get('utilitat_publica') == 'on') {
            $ut = true;     
        }
        $nouOng = new Ongs([
            'CIF'   =>  $request->get('CIF'),
            'nom'   =>   $request->get('nom'),
            'adresa'    =>   $request->get('adresa'),
            'poblacio'  =>   $request->get('poblacio'),
            'comarca'   =>   $request->get('comarca'),
            'tipus'     =>   $request->get('tipus'),
            'utilitat_publica'  =>  $ut
        ]);
        $missatge = 'Aquesta ONG ja existeix';
        try {
            $nouOng->save();
            $missatge = 'ONG afegida';
        } catch (Exception $e) {} finally {
            return redirect()->route('ongs.create')->with('Exit', $missatge);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $CIF
     * @return \Illuminate\Http\Response
     */
    public function show($CIF)
    {
        $ongs= DB::select('select * from ongs where CIF = ?',[$CIF]);
        return view('ongs.dadesModificacioOngs',['ongs'=>$ongs]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $CIF
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$CIF)
    {
        //$CIF = $request->input('CIF');
        $nom = $request->input('nom');
        $adresa = $request->input('adresa');
        $poblacio = $request->input('poblacio');
        $comarca = $request->input('comarca');
        $tipus = $request->input('tipus');
        $utilitat_publica = $request->input('utilitat_publica');
        DB::update('update ongs set nom = ?, adresa = ?, poblacio = ?, comarca = ?, tipus = ?, utilitat_publica = ? where CIF = ?',[$nom,$adresa,$poblacio,$comarca,$tipus,$utilitat_publica,$CIF]);
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
     * @param  int  $CIF
     * @return \Illuminate\Http\Response
     */
    public function destroy($CIF)
    {
        DB::select('delete from ongs where CIF = ?', [$CIF]);
        echo "Registre esborrat"; 
    }
}
