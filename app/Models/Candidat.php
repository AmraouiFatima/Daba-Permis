<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'idUser');
    }

    public function school()
    {
        return $this->belongsTo(School::class,'idSchool');
    }

    public function seance()
    {
        return $this->hasMany(Seance::class,'idCandidat');
    }
}
