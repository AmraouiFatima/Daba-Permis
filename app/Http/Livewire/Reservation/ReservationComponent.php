<?php

namespace App\Http\Livewire\Reservation;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Seance;
use App\Models\School;
use App\Models\Candidat;
use App\Models\Moniteur;
use App\Models\Parking;

class ReservationComponent extends Component
{
    public $school,$idS;
    public $moniteur;
    public $candidat;
    public $car;
    public $type;
    public $date;
    public $searchDate;

    public function addReservation()
    {

       $this->validate([
            'school' => 'required',
            'moniteur' => 'required',
            'candidat' => 'required',
            'car' => 'required',
            'type' => 'required',
            'date' => 'required',
        ]);

       Seance::insert([
            'idSchool' => $this->school,
            'idMoniteur' => $this->moniteur,
            'idCandidat' => $this->candidat,
            'idCar' => $this->car,
            'type' => $this->type,
            'date' => $this->date,
        ]);
        
        session()->flash('newReservationAdded', 'تمت إضافة الحجز بنجاح');
        
        //dd($this->idS);
    }

    public function deleteReservation($id){
        Seance::where('id',$id)->delete();
        session()->flash('reservationDeleted', 'تم مسح الحجز بنجاح');
    }

    use WithPagination;
    public function render()
    {
       // $searchDate = $this->searchDate;
        $schools = School::all();
        $moniteurs = Moniteur::all();
        $candidats = Candidat::all();
        $cars = Parking::all();
        $reservations = Seance::paginate(6);
        return view('livewire.reservation.reservation-component',['reservations'=>$reservations,'schools'=>$schools,'moniteurs'=>$moniteurs, 'candidats'=>$candidats, 'cars'=>$cars]);
    }
}
