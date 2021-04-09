<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treballadors;
use App\TreballadorProfessionals;
use App\TreballadorsVoluntaris;
use DB;
use Session;

class trebctl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treballadors_voluntaris = DB::table('treballadors_voluntaris')->join('treballadors', 'treballadors.NIF',
        '=', 'treballadors_voluntaris.NIF')->select('*')->get();
        $treballadors_professionals = DB::table('treballador_professionals')->join('treballadors', 'treballadors.NIF',
        '=', 'treballador_professionals.NIF')->select('*')->get();
        return view('treballadors.mostraTreballadors', ['treballadors_voluntaris'=>$treballadors_voluntaris, 
        'treballadors_professionals'=>$treballadors_professionals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ongs = DB::select('select * from ongs');
        if ($request->has('professional')) {
            return view('treballadors.afegeixTreballadorProfessional', ['ongs'=>$ongs]);
        } else {
            return view('treballadors.afegeixTreballadorVoluntari', ['ongs'=>$ongs]);
        }
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
            'NIF'   =>  'required',
            'nom_cognoms'   =>  'required',
            'adresa'    =>  'required',
            'poblacio'  =>  'required',
            'comarca'   =>  'required',
            'tel_fixe'     =>  'required',
            'tel_mobil'     =>  'required',
            'email'     =>  'required',
            'data_ingres'     =>  'required',
            'CIF_ong'     =>  'required',
            ]);
        $nouTreb = new Treballadors([
            'NIF'   =>  $request->get('NIF'),
            'nom_cognoms'   =>   $request->get('nom_cognoms'),
            'adresa'    =>   $request->get('adresa'),
            'poblacio'  =>   $request->get('poblacio'),
            'comarca'   =>   $request->get('comarca'),
            'tel_fixe'     =>   $request->get('tel_fixe'),
            'tel_mobil'     =>   $request->get('tel_mobil'),
            'email'     =>   $request->get('email'),
            'data_ingres'     =>   $request->get('data_ingres'),
            'CIF_ong'     =>   $request->get('CIF_ong')
        ]);
        if($request->has('voluntari')) {
            $this->validate($request, [
                'NIF'   =>  'required',
                'edat'   =>  'required',
                'professio'    =>  'required',
                'hores'    =>  'required'
                ]);
            $nouTrebVol = new TreballadorsVoluntaris([
                'NIF'   =>  $request->get('NIF'),
                'edat'   =>   $request->get('edat'),
                'professio'    =>   $request->get('professio'),
                'hores'    =>   $request->get('hores')
            ]);
            $nouTreb->save();
            $nouTrebVol->save();
            return redirect('/treballadors');
        } else {
            $this->validate($request, [
                'NIF'   =>  'required',
                'carrec'   =>  'required',
                'quantitat_SS'    =>  'required',
                'percentatge_irpf'    =>  'required'
                ]);
            $nouTrebProf = new TreballadorProfessionals([
                'NIF'   =>  $request->get('NIF'),
                'carrec'   =>   $request->get('carrec'),
                'quantitat_SS'    =>   $request->get('quantitat_SS'),
                'percentatge_irpf'    =>   $request->get('percentatge_irpf')
            ]);
            $nouTreb->save();
            $nouTrebProf->save();
            return redirect('/treballadors');
            
        }
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
