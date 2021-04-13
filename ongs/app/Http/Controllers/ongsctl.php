<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ongs;
use DB;
class ongsctl extends Controller
{
    public function index()
    {
        $ongs= DB::select('select * from ongs');
        return view('ongs.seleccionaOngsPerModificacio',['ongs'=>$ongs]);
    }

    public function create()
    {
       return view('ongs.afegeixOngs');
    }

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
        try {
            $nouOng->save();
        } catch (Exception $e) {} finally {
            return redirect()->route('ongs.index');
        }
    }

    public function show($CIF)
    {
        $ongs= DB::select('select * from ongs where CIF = ?',[$CIF]);
        return view('ongs.dadesModificacioOngs',['ongs'=>$ongs]);
    }

    public function edit(Request $request,$CIF)
    {
        $ut = false;
        if ($request->get('utilitat_publica') == 'on') {
            $ut = true;     
        }
        $nom = $request->input('nom');
        $adresa = $request->input('adresa');
        $poblacio = $request->input('poblacio');
        $comarca = $request->input('comarca');
        $tipus = $request->input('tipus');
        DB::update('update ongs set nom = ?, adresa = ?, poblacio = ?, comarca = ?, tipus = ?, utilitat_publica = ? where CIF = ?',[$nom,$adresa,$poblacio,$comarca,$tipus,$ut,$CIF]);
        return redirect()->route('ongs.index');
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($CIF)
    {
        DB::select('delete from socis_ongs where CIF_ONG = ?', [$CIF]);
        DB::select('delete from ongs where CIF = ?', [$CIF]);
        return redirect()->route('ongs.index');
    }
}
