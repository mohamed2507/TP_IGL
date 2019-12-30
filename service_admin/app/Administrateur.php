<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    public $timestamps = false;
    protected $fillable = ['nom','prenom','dateN','sexe','gmail','adresse'];
}
