<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use Validator;
use App\Rules\DateN;
use App\Rules\DateVide;
use Illuminate\Support\Facades\DB;

class SubmitEController extends Controller
{
    public function store(Request $r){

        $validatedData = $r->validate([
            'nom' => 'required|min:3|alpha',
            'prenom' => 'required|min:3|alpha',
            'sexe' => 'required',
            'dateN' => [new DateVide,new DateN],
            'promo' => 'required',

        ]);
        $gmail=$r->get('nom')[0].$r->get('prenom')[0].'_'.$r->get('nom');
        $matricule=Etudiant::where('promo',request('promo'))->max('matricule')+1;
        $affected=false;
        $num_groupe = 1;
        while (!$affected && $num_groupe<=12)
        {
            $num_etudiant=Etudiant::where('groupe',1)->get()->count();

                if($num_etudiant ==0)
                {
                    $affected=true;
                }
                else
                {
                    if($num_etudiant>28)
                    {
                        $num_etudiant++;
                    }
                    else
                    {
                        $affected =true;
                    }
                }

        }
        $section='A';
        if ($num_groupe >=5){$section='B';}
        if ($num_groupe >=9){$section='C';}


        Etudiant::create([
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'sexe'=>request('sexe'),
            'dateN'=>request('dateN'),
            'promo'=>request('promo'),
            'section'=>$section,
            'groupe'=>$num_groupe,
            'matricule'=>$matricule,
            'gmail'=>$gmail,

        ]);

    }

}
