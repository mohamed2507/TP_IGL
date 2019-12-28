<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrateur;
use Validator;
use App\Rules\DateN;
use App\Rules\DateVide;
use Illuminate\Support\Facades\DB;

class SubmitAController extends Controller
{
    public function store(Request $r){

        $validatedData = $r->validate([
            'nom' => 'required|min:3|alpha',
            'prenom' => 'required|min:3|alpha',
            'sexe' => 'required',
            'dateN' => [new DateVide,new DateN],
            'adresse' => 'required',

        ]);
        $gmail=$r->get('nom')[0].$r->get('prenom')[0].'_'."admin_".$r->get('nom');

        Administrateur::create([
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'sexe'=>request('sexe'),
            'dateN'=>request('dateN'),
            'adresse'=>request('adresse'),
            'gmail'=>$gmail,

        ]);

    }

}
