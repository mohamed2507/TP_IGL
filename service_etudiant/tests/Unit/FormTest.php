<?php

namespace Tests\Unit;

use App\Administrateur;
use App\Etudiant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;

class FormTest extends TestCase
{
     use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->post('api/etudiant/register',['nom'=>"benmaiza","prenom"=>"mohamed","sexe"=>'Male',"dateN"=>'2000-12-12','promo'=>'1 CP']);
        $this->assertCount(1,Etudiant::all());
        /*$etudiant = Etudiant::create(['nom'=>"benmaiza","prenom"=>"mohamed","sexe"=>'Male',"dateN"=>'2000-12-12','promo'=>'1 CP']);
        //$this->assertEquals("benmaiza mohamed Male 2000-12-12 1 CP",$etudiant->full_account());
        $this->assertDatabaseHas('etudiants',['nom'=>"benmaiza","prenom"=>"mohamed","sexe"=>'Male',"dateN"=>'2000-12-12','promo'=>'1 CP']);
        /*$respons=$this->post('/etudiant/register',['nom'=>"benmaiza","prenom"=>"mohamed","sexe"=>'Male',"dateN"=>'2000-12-12','promo'=>'1 CP']);
        $respons->assertStatus(302);*/


       /* $respons=$this->get('/formulaire-admin');
        $respons->assertStatus(200);//http status code
        $admin = Administrateur::create(['nom'=>"benmaiza","prenom"=>"mohamed","sexe"=>'Male',"dateN"=>'2000-12-12','adresse'=>'alger']);
        $this->assertDatabaseHas('administrateurs',['nom'=>"benmaiza","prenom"=>"mohamed","sexe"=>'Male',"dateN"=>'2000-12-12','adresse'=>'alger']);//verifier la base de donnés
        /*$respons=$this->post('/admin/register',['nom'=>"benmaiza","prenom"=>"mohamed","sexe"=>'Male',"dateN"=>'2000-12-12','adresse'=>'alger',"_token"=>$token  ]);
        $respons->assertStatus(302);*/
        }
}
