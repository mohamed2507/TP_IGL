<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public $timestamps = false;
    protected $fillable = ['nom','prenom','dateN','sexe','promo','gmail','matricule','groupe','section'];
}
