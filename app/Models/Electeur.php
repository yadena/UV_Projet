<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electeur extends Model
{
    use HasFactory;
    protected $filliable=[
        'faculte',
        'filiere',
        'niveau',
        'matricule',
        'candidat_id'

    ];

    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }
}
