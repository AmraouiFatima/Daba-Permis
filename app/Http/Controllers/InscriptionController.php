<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class InscriptionController extends Controller
{

    public function index()
    {
        return \view('inscriptionForm.formInscription');
    }


    public function storeSchool(Request $request)
    {
        $request->validate([
            'fullname_auto' => 'required',
            'email_auto' => 'required',
            'city_auto' => 'required',
            'adresse_auto' => 'required',
            'phone_auto' => 'required',
            'school' => 'required',

        ]);

        Inscription::insert([
            'fullname' => request('fullname_auto'),
            'email' => request('email_auto'),
            'idType' => 1,
            'nameSchool' => request('school'),
            'city' => request('city_auto'),
            'adresse' => request('adresse_auto'),
            'phoneNo' => request('phone_auto'),
        ]);

        session()->flash('newInscriptionAuto', 'تم إنشاء تسجيل مدرسة لتعليم القيادة بنجاح');


        return redirect()->route('formInscription');
    }

    public function storeMoniteur(Request $request)
    {
        $request->validate([
            'fullname_moniteur' => 'required',
            'email_moniteur' => 'required',
            'phone_moniteur' => 'required',
            'cni_moniteur' => 'required',
            'city_moniteur' => 'required',
            'adresse_moniteur' => 'required',

        ]);

        Inscription::insert([
            'fullname' => request('fullname_moniteur'),
            'email' => request('email_moniteur'),
            'idType' => 2,
            'city' => request('city_moniteur'),
            'adresse' => request('adresse_moniteur'),
            'cni' => request('cni_moniteur'),
            'phoneNo' => request('phone_moniteur'),
        ]);

        session()->flash('newInscriptionMoniteur', 'تم إنشاء تسجيل المدرب بنجاح');
        return redirect()->route('formInscription');
    }

    public function storeCandidat(Request $request)
    {
        $request->validate([
            'fullname_candidat' => 'required',
            'email_candidat' => 'required',
            'phone_candidat' => 'required',
            'cni_candidat' => 'required',
            'city_candidat' => 'required',
            'adresse_candidat' => 'required',
        ]);

        Inscription::insert([
            'fullname' => request('fullname_candidat'),
            'email' => request('email_candidat'),
            'idType' => 3,
            'city' => request('city_candidat'),
            'adresse' => request('adresse_candidat'),
            'cni' => request('cni_candidat'),
            'phoneNo' => request('phone_candidat'),
        ]);


        session()->flash('newInscriptionCandidat', 'تم إنشاء تسجيل  بنجاح');
        return redirect()->route('formInscription');
    }
}
