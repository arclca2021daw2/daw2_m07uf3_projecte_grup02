<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuaris;
use DB;
use Session;

class usuarisctl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('admin')) {
            $usuaris= DB::select('select * from usuaris');
            return view('usuaris.mostraUsuaris',['usuaris'=>$usuaris]);
        } else {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuaris.afegeixUsuari');
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
            'nom_usuari'   =>  'required',
            'contrasenya'   =>  'required',
            'nom'    =>  'required',
            'cognoms'  =>  'required',
            'email'   =>  'required',
            'mobil'     =>  'required',
            ]);
        $admin = false;
        if ($request->get('administrador') == 'on') {
            $admin = true;     
        }
        $nouUsr = new Usuaris([
            'nom_usuari'   =>  $request->get('nom_usuari'),
            'contrasenya'   =>   md5($request->get('contrasenya')),
            'nom'    =>   $request->get('nom'),
            'cognoms'  =>   $request->get('cognoms'),
            'email'   =>   $request->get('email'),
            'mobil'     =>   $request->get('mobil'),
            'administrador'  =>  $admin
        ]);
        try {
            $nouUsr->save();
        } catch (Exception $e) {} finally {
            return redirect('/usuaris');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $usuaris= DB::select('select * from usuaris where nom_usuari = ?',[$user]);
        return view('usuaris.modificarUsuari',['usuaris'=>$usuaris]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $user)
    {
        $admin = false;
        if ($request->get('administrador') == 'on') {
            $admin = true;     
        }
        $contrasenya = $request->input('contrasenya');
        $nom = $request->input('nom');
        $cognoms = $request->input('cognoms');
        $email = $request->input('email');
        $mobil = $request->input('mobil');
        if ($contrasenya == '') {
            DB::update('update usuaris set nom = ?, cognoms = ?, email = ?, mobil = ?, administrador = ? where nom_usuari = ?',[$nom,$cognoms,$email,$mobil,$admin,$user]); 
        } else {
            DB::update('update usuaris set contrasenya = ?, nom = ?, cognoms = ?, email = ?, mobil = ?, administrador = ? where nom_usuari = ?',[md5($contrasenya),$nom,$cognoms,$email,$mobil,$admin,$user]); 
        }
        return redirect('usuaris');
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
    public function destroy($user)
    {
        DB::select('delete from usuaris where nom_usuari = ?', [$user]);
        return redirect('/usuaris');
    }
}
