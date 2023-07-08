<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electeur extends Model
{
    use HasFactory;
    protected $filliable=[
        'nom',
        'prenom',
        'candidat_id',
        'filiere',
        'niveau'
    ];

    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }
}
