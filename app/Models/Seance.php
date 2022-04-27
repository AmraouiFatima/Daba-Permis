<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    public function candidat()
    {
        return $this->belongsTo(Candidat::class,'idCandidat');
    }

    //$seance->candidat->user->fullname

    public function school()
    {
        return $this->belongsTo(School::class,'idSchool');
    }

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class,'idMoniteur');
    }

    public function parking()
    {
        return $this->belongsTo(Parking::class,'idCar');
    }
}
