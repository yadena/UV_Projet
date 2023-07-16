<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electeur extends Model
{
    use HasFactory;
    protected $filliable=[
        'nom',
        'faculte',
        'filiere',
        'niveau',
        'matricule',
        

    ];

    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }
}
