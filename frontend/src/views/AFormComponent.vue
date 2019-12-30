<template>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" style="left:50%;">Ajouter un administrateur</h2>
                    <form  @submit.prevent="submitform()" >

                        <p v-if="errors.nom" v-text="errors.nom[0]" class="error"> </p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nom" v-model="nom" name="nom" id='nom'>
                        </div>
                        <p v-if="errors.prenom" v-text="errors.prenom[0]" class="error"> </p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Prénom" v-model="prenom" name="prenom" id='prenom'>
                        </div>
                            <p v-if="errors.adresse" v-text="errors.adresse[0]" class="error"> </p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="adresse" v-model="adresse" name="adresse" id='adresse'>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <p v-if="errors.dateN" v-text="errors.dateN[0]" class="error"> </p>
                                <div class="input-group" >
                                    <input class="input--style-1 js-datepicker " type="text" placeholder="Date de naissance" id='dateN' name="dateN" v-model="dateN" >
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>

                                </div>
                            </div>
                            <div class="col-2">
                                <p v-if="errors.sexe" v-text="errors.sexe[0]" class="error"> </p>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sexe" v-model="sexe" id="sexe" >
                                            <option disabled value="">sexe</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <p class="sucess" style="left:50%;"></p>
                        <p class="gmail" style="left:50%;"></p>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" style="left:50%;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
    <style>
        .error
        {
            color:red;
        }
        .sucess
        {
            text-align:center;
            color :#00e600;
            font-size: 20px;

        }
        .gmail
        {
            text-align:center;
            color: black;
            font-size: 15px;
        }
    </style>

<script>
import axios from 'axios'

export default {

  data() {
    return {
        nom:'',
        prenom:'',
        sexe:'',
        adresse:'',
        dateN:'',
        errors:{}

    }
  },
    methods:
    {

        submitform()
        {
            var z='';
            if($('#dateN').val()!=''){
                var x=$('#dateN').val();
                var y = x.split("/");
                 z=y[2]+'-'+y[1]+'-'+y[0];
            }

           axios.post('http://localhost:8000/api/admin/register',{
               adresse: $('#adresse').val(),
                nom: $('#nom').val(),
                prenom:$('#prenom').val(),
                sexe: $('#sexe').val(),
                dateN: z,



            }).then(function(response)
            {
       
                $(".sucess").html('Succès : Administrateur inseré');
                 $(".gmail").text('gmail:'+response.data.gmail+'@esi.dz');
            }).catch(error =>{
            this.errors=error.response.data.errors;
            });
        }
    }
}
</script>

