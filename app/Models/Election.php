<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;
    protected $guarded=[];
   /* public function electeur(){
        return $this->hasMany(Electeur::class);
    }*/
    public function candidat(){
        return $this->hasMany(Candidat::class);
    }
}
