import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import form from '../views/form.vue'
import AFormComponent from '../views/AFormComponent.vue'
import FormComponent from '../views/FormComponent.vue'
Vue.use(VueRouter)

const routes = [

  {
    path: '/form',
    name: 'form',
    component: form
  },
  {
    path: '/form-admin',
    name: 'form-admin',
    component: AFormComponent
  },
  {
    path: '/form-etudiant',
    name: 'form-etudiant',
    component: FormComponent
  }

]

const router = new VueRouter({
 mode: 'history',
  base: process.env.BASE_URL, 
  routes
})

export default router
