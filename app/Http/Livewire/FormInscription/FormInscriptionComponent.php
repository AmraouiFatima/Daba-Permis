<?php

namespace App\Http\Livewire\FormInscription;

use Livewire\Component;
use App\Models\Inscription ;
use App\Models\Type ;

class FormInscriptionComponent extends Component
{
    public $lname_auto;
    public $fname_auto;
    public $email_auto;
    public $phone_auto;
    public $school;
    public $city_auto;
    public $adresse_auto;

    public $lname_moniteur;
    public $fname_moniteur;
    public $email_moniteur;
    public $phone_moniteur;
    public $cni_moniteur;
    public $city_moniteur;
    public $adresse_moniteur;

    public $lname_candidat;
    public $fname_candidat;
    public $email_candidat;
    public $phone_candidat;
    public $cni_candidat;
    public $city_candidat;
    public $adresse_candidat;
    
    //add new programme function with the validation
    public function addInscriptionSchool()
    {
        $this->validate([
            'fname_auto' => 'required',
            'lname_auto' => 'required',
            'email_auto' => 'required',
            'city_auto' => 'required',
            'adresse_auto' => 'required',
            'phone_auto' => 'required',
            'school' => 'required',
        ]);

        Inscription::insert([
            'fullname' => $this->fname_auto .' '. $this->lname_auto,
            'email' => $this->email_auto,
            'idType' => 1,
            'city' => $this->city_auto,
            'adresse' => $this->adresse_auto,
            'phoneNo' => $this->phone_auto,
        ]);
        
        session()->flash('newInscriptionAdded', 'تمت إضافة التسجيل بنجاح');
       
    }

    public function addInscriptionMoniteur()
    {
        $this->validate([
            'fname_moniteur' => 'required',
            'lname_moniteur' => 'required',
            'email_moniteur' => 'required',
            'city_moniteur' => 'required',
            'cni_moniteur' => 'required',
            'adresse_moniteur' => 'required',
            'phone_moniteur' => 'required',
        ]);

        Inscription::insert([
            'fullname' => $this->fname_moniteur .' '. $this->lname_moniteur,
            'email' => $this->email_moniteur,
            'idType' => 2,
            'city' => $this->city_moniteur,
            'adresse' => $this->adresse_moniteur,
            'phoneNo' => $this->phone_moniteur,
            'cni' => $this->cni_moniteur,
        ]);

        session()->flash('newInscriptionAdded', 'تمت إضافة التسجيل بنجاح');
       
    }

    public function addInscriptionCandidat()
    {
        $this->validate([
            'fname_candidat' => 'required',
            'lname_candidat' => 'required',
            'email_candidat' => 'required',
            'city_candidat' => 'required',
            'cni_candidat' => 'required',
            'adresse_candidat' => 'required',
            'phone_candidat' => 'required',
        ]);

        Inscription::insert([
            'fullname' => $this->fname_candidat .' '. $this->lname_candidat,
            'email' => $this->email_candidat,
            'idType' => 3,
            'city' => $this->city_candidat,
            'adresse' => $this->adresse_candidat,
            'phoneNo' => $this->phone_candidat,
            'cni' => $this->cni_candidat,
        ]);

  

        session()->flash('newInscriptionAdded', 'تمت إضافة التسجيل بنجاح');
       
    }

    public function render()
    {
        return view('livewire.form-inscription.form-inscription-component');
    }
}
