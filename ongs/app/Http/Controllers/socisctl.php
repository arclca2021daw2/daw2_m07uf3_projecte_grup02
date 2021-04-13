<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socis;
use App\Models\SocisOngs;
use DB;
use Session;
class socisctl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $socis = DB::table('socis')->join('socis_ongs', 'socis_ongs.NIF_soci','=', 'socis.NIF')->join("ongs","ongs.CIF","=","socis_ongs.CIF_ONG")->select('socis.NIF', 'socis.nom_cognoms', 'socis.adresa', 'socis.poblacio', 'socis.comarca', 'socis.tel_fixe', 'socis.tel_mobil', 'socis.email', 'socis.data_alta', 'socis.quota_mensual', 'socis.aportacio_anual', 'socis_ongs.CIF_ONG')->get();
       
        return view('socis.mostraSocis', ['socis'=>$socis]);





       /* $socis = DB::select('select * from socis');
        return view('socis.mostraSocis',['socis'=>$socis]);
        //return view('socis.esborraSocis',['socis'=>$socis]);
        //return view('socis.seleccionaSocisPerModificacio',['socis'=>$socis]);
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       // return view('socis.afegeixSocis');
    
        $ongs=DB::select("select * from ongs");

           return view('socis.afegeixSocis', ['ongs'=>$ongs]);
       
        
    
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ongs=DB::select("select * from ongs");
        $ongsSoci=[];
        foreach($ongs as $ong){

            if($request->has($ong->CIF)){

                array_push($ongsSoci,$ong->CIF);
            }

        }
       
        if(count($ongsSoci)==0){

            return redirect()->route('socis.create')->with("error","Selecciona al menos una ong");
        }

        
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
            foreach($ongsSoci as $ong){

                $nouSociOng=new SocisOngs([
                    'CIF_ONG'=>$ong,
                    'NIF_soci'=>$request->get('NIF')
                ]);
                $nouSociOng->save();
            }
           
           
            return redirect('/socis');
        
           
    }


        //$nouSocis->save();
       // return redirect()->route('socis.create')->with('Exit', 'Dades afegides');
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $treb)

    {

        if($request->has('CIF_ONG')) {
            $socis = DB::table('socisOngs')->where('socis.NIF', $socis)->join('socis', 'socis.NIF',
            '=', 'socisOngs.NIF')->select('*')->get();
            return view('socis.dadesModificacioSocisOngs',['socis'=>$socis]);
        } else {
            $socis = DB::table('socis')->where('socis.NIF', $socis)->join('socis', 'socis.NIF',
            '=', 'socis.NIF')->select('*')->get();
            return view('socis.dadesModificacioSocis',['socis'=>$socis]);
        }




       // $socis = DB::select('select * from socis where NIF = ?', [$NIF]);
       // return view('socis.dadesModificacioSocis',['socis'=>$socis]); 
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





        if($request->has('CIF_ONG')) {
            $CIF_ONG = $request->input('CIF_ONG');
            $NIF_soci = $request->input('NIF_soci');
           
            DB::update('update socisOngs set CIF_ONG = ?, NIF_soci = ?,', [$CIF_ONG, $NIF_soci]);
        } 
        
        return redirect('socis');







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
       
       
      DB::select("delete from socis_ongs where NIF_soci=?",[$NIF]);
       
       
       

       
       
        DB::select('delete from socis where NIF = ?', [$NIF]);
        echo "Registre esborrat"; 
    }
}
