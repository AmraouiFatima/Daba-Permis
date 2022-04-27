<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class InscriptionController extends Controller
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
        //
        return view ('formInscription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSchool(Request $request)
    {
        $inscription=new Inscription;
        $inscription->fullname=$request->input('fullname_auto');
        $inscription->email=$request->input('email_auto');
        $inscription->idType=1;
        $inscription->city=$request->input('city_auto');
        $inscription->adresse=$request->input('adresse_auto');
        $inscription->phoneNo=$request->input('phone_auto');
        $inscription->save();
        return view ('formInscription');
    }

    public function storeMoniteur(Request $request)
    {
        $inscription=new Inscription;
        $inscription->fullname=$request->input('fullname_moniteur');
        $inscription->email=$request->input('email_moniteur');
        $inscription->idType=2;
        $inscription->city=$request->input('city_moniteur');
        $inscription->cni=$request->input('cni_moniteur');
        $inscription->adresse=$request->input('adresse_moniteur');
        $inscription->phoneNo=$request->input('phone_moniteur');
        $inscription->save();
        return view ('formInscription');
    }

    public function storeCandidat(Request $request)
    {
        $inscription=new Inscription;
        $inscription->fullname=$request->input('fullname_candidat');
        $inscription->email=$request->input('email_candidat');
        $inscription->idType=3;
        $inscription->city=$request->input('city_candidat');
        $inscription->cni=$request->input('cni_candidat');
        $inscription->adresse=$request->input('adresse_candidat');
        $inscription->phoneNo=$request->input('phone_candidat');
        $inscription->save();
        return view ('formInscription');
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
