<template>
  <div id="app">
		<form method="POST" v-on:submit.prevent="action()">
			<input type="text" name="nom" v-model="nom">
			<input type="submit" name="submit">
		</form>
  </div>
</template>

<script>


import axios from 'axios'
export default {


  methods:
  {

    action()
    {
      axios.post('http://localhost:8000/api/register',{'nom':this.nom});
    }
  }

}
</script>