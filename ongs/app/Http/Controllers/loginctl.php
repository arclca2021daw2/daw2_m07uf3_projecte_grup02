<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class loginctl extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user = $request->input('user');
        $passwd = $request->input('passwd');
        $usuaris= DB::select('select * from usuaris where nom_usuari = ?',[$user]);
        
        if(count($usuaris) > 0) {
            if ($usuaris[0]->contrasenya == md5($passwd)) {
                $data = date('Y-m-d H:i:s');
                $nom = $usuaris[0]->nom_usuari;
                DB::update('update usuaris set ultima_entrada = ? where nom_usuari = ?',
                [$data, $nom]);
                Session::put('usuari', $usuaris[0]->nom_usuari);
                if ($usuaris[0]->administrador) {
                    Session::put('admin', true);
                    return redirect('/'); 
                } else {
                    return redirect('/'); 
                }
            } else {
                return redirect()->route('login.index')->with('error', 'Contrasenya incorrecta');
            }
        } else {
            return redirect()->route('login.index')->with('error', 'Aquest usuari no existeix');
        }
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
    public function destroy($nom)
    {
        Session::flush();
        $data = date('Y-m-d H:i:s');
        DB::update('update usuaris set ultima_sortida = ? where nom_usuari = ?',
        [$data, $nom]);
        return redirect()->route('login.index');
    }
}
