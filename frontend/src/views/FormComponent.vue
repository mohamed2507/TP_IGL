<template>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" style="left:50%;">Ajouter un étudiant</h2>
                    <form  @submit.prevent="submitform()" >

                        <p v-if="errors.nom" v-text="errors.nom[0]" class="error"> </p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nom" v-model="nom" name="nom" id='nom'>
                        </div>
                        <p v-if="errors.prenom" v-text="errors.prenom[0]" class="error"> </p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Prénom" v-model="prenom" name="prenom" id='prenom'>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <p v-if="errors.dateN" v-text="errors.dateN[0]" class="error"> </p>
                                <div class="input-group" >
                                    <input class="input--style-1 js-datepicker " type="text" placeholder="Date de naissance" id='dateN' name="dateN" v-model="dateN" value="">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>

                                </div>
                            </div>
                            <div class="col-2">
                                <p v-if="errors.sexe" v-text="errors.sexe[0]" class="error"> </p>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sexe" v-model="sexe" id="sexe">
                                            <option disabled value="">sexe</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p v-if="errors.promo" v-text="errors.promo[0]" class="error"> </p>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="promo" v-model="promo" value='' id='promo'>
                                    <option disabled value="">Promo</option>
                                    <option value="1 CP">1 CP</option>
                                    <option value="1 CS">1 CS</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <p class="sucess" style="left:50%;"></p>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" style="left:50%;" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {

  data() {
    return {
        nom:'',
        prenom:'',
        promo:'',
        sexe:'',
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
           axios.post('http://localhost:8001/api/etudiant/register',{

                nom: $('#nom').val(),
                prenom:$('#prenom').val(),
                sexe: $('#sexe').val(),
                dateN: z,
                promo: $('#promo').val(),


            }).then(function(response)
            {
                $(".sucess").html('Succès : étudiant inseré');
            }).catch(error =>{
            this.errors=error.response.data.errors;
            });
        }
    }
}
</script>

