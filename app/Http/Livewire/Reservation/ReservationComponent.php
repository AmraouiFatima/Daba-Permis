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
    public $school;
    public $moniteur;
    public $candidat;
    public $car;
    public $type;
    public $date_res;

    public $fromDate;
    public $toDate;
    public $searchCandidat;

    public $id_res;
    public $id_c;

    public function addReservation()
    {

        $this->validate([
            'school' => 'required',
            'moniteur' => 'required',
            'candidat' => 'required',
            'car' => 'required',
            'type' => 'required',
            'date_res' => 'required',
        ]);

        Seance::insert([
            'idSchool' => $this->school,
            'idMoniteur' => $this->moniteur,
            'idCandidat' => $this->candidat,
            'idCar' => $this->car,
            'type' => $this->type,
            'date' => $this->date_res,
        ]);

        session()->flash('newReservationAdded', 'تمت إضافة الحجز بنجاح');
        $this->emit('reservationCreate');

        //dd($this->idS);
    }

    public function editReservation($id)
    {

        $reservation = Seance::find($id);
        $this->school = $reservation->idSchool;
        $this->moniteur = $reservation->idMoniteur;
        $this->candidat = $reservation->idCandidat;
        $this->type = $reservation->type;
        $this->date = $reservation->date;
        $this->car = $reservation->idCar;
        $this->id_res = $reservation->id;
    }

    public function updateReservation()
    {
        $this->validate([
            'school' => 'required',
            'moniteur' => 'required',
            'candidat' => 'required',
            'car' => 'required',
            'type' => 'required',
            'date' => 'required',
        ]);

        Seance::where('id', $this->id_res)->update([
            'idSchool' => $this->school,
            'idMoniteur' => $this->moniteur,
            'idCandidat' => $this->candidat,
            'idCar' => $this->car,
            'type' => $this->type,
            'date' => $this->date_res,
        ]);

        //dd($this->id_res);

        session()->flash('reservationUpdated', 'تم تعديل الحجز بنجاح');
        $this->emit('reservationUpdate');
    }

    public function deleteReservation($id)
    {
        Seance::where('id', $id)->delete();
        session()->flash('reservationDeleted', 'تم مسح الحجز بنجاح');
    }

    use WithPagination;
    public function render()
    {
        $fromDate = $this->fromDate;
        $toDate = $this->toDate;
        $searchCandidat = $this->searchCandidat;
        $schools = School::all();
        $moniteurs = Moniteur::all();
        $candidats = Candidat::all();
        $cars = Parking::all();
        /* if (($fromDate == null) && ($toDate == null) && ($searchCandidat == null)) {
            $reservations = Seance::paginate(5);
        }
        elseif (($searchCandidat != null)) {
            $reservations = Seance::join('candidats','candidats.id','=','seances.idCandidat')
                                    ->join('users','users.id','=','candidats.idUser')
                                    ->where('users.fullname','LIKE','%'.$searchCandidat.'%')
                ->paginate(5);
            
            
        }
        else {
            $reservations = Seance::whereBetween('date', [$fromDate, $toDate])->paginate(5);
        } */
        if ($this->searchCandidat) {
            $reservations = Seance::where('idCandidat', $searchCandidat)->paginate(5);
        } elseif (($this->fromDate) && ($this->toDate)) {
            $reservations = Seance::whereBetween('date', [$fromDate, $toDate])->paginate(5);
        } else
        $reservations = Seance::paginate(5);
        return view('livewire.reservation.reservation-component', ['reservations' => $reservations, 'schools' => $schools, 'moniteurs' => $moniteurs, 'candidats' => $candidats, 'cars' => $cars]);
    }
}
