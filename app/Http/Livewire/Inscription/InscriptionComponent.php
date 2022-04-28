<?php

namespace App\Http\Livewire\Inscription;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Inscription ;

class InscriptionComponent extends Component
{

    public function deleteInscription(){
        
    }
    use WithPagination;
    public function render()
    {
        $inscriptions = Inscription::paginate(5);
        return view('livewire.inscription.inscription-component',['inscriptions'=>$inscriptions]);
    }
}