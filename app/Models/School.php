<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public function candidat()
    {
        return $this->hasMany(Candidat::class,'idSchool');
    }

    public function moniteur()
    {
        return $this->hasMany(Moniteur::class,'idSchool');
    }
    
    public function parking()
    {
        return $this->hasMany(Parking::class,'idSchool');
    }

    public function seance()
    {
        return $this->hasMany(Seance::class,'idSchool');
    }
}
