import Vue from 'vue'

import App from './App.vue'
import Router from 'vue-router'
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate/dist/vee-validate.full.esm';

Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

import Dashboard from '@/components/Dashboard'
import DashboardHome from '@/pages/Home'

import Estimates from '@/pages/Estimates'
import AddEstimate from '@/pages/AddEstimate'

import Invoices from '@/pages/Invoices'
import AddInvoice from '@/pages/AddInvoice'

import Customers from '@/pages/Customers'
import AddCustomer from '@/pages/AddCustomer'

import Products from '@/pages/Products'
import AddProduct from '@/pages/AddProduct'

import Services from '@/pages/Services'
import AddService from '@/pages/AddService'

import Settings from '@/pages/Settings'

import Appointments from '@/pages/Appointments'
import AddAppointment from '@/pages/AddAppointment'

import Timetracking from '@/pages/Timetracking'
import AddTime from '@/pages/AddTime'

import axios from 'axios'

axios.defaults.baseURL = 'http://localhost:8000'

Vue.prototype.$axios = axios

import store from './store'

import './assets/styles/index.css';

Vue.use(Router)


Vue.config.productionTip = false

const routes = [
  { path: '/', redirect: { name: 'DashboardHome' } },
  { path: '/dashboard', component: Dashboard, children: [
      { path: '/', redirect: { name: 'DashboardHome' } },
      { path: 'home', name: 'DashboardHome', component: DashboardHome },
      { path: 'estimates', name: 'Estimates', component: Estimates, children: [
        {path: 'estimates/add', name: 'AddEstimate', component: AddEstimate}
      ] },
      { path: 'invoices', name: 'Invoices', component: Invoices, children: [
        {path: 'invoices/add', name: 'AddInvoice', component: AddInvoice}
      ] },
      { path: 'products', name: 'Products', component: Products },
      { path: 'add', name: 'AddProduct', component: AddProduct },
      { path: 'services', name: 'Services', component: Services },
      { path: 'services/add', name: 'AddService', component: AddService},
      { path: 'customers', name: 'Customers', component: Customers },
      { path: 'customers/add', name: 'AddCustomer', component: AddCustomer},
      { path: 'appointments', name:'Appointments', component: Appointments, children:[
        {path: 'appointments/add', name: 'AddAppointment', component: AddAppointment}
      ]},
      { path: 'timetracking', name:'Timetracking', component: Timetracking, children:[
        {path: 'timetracking/add', name: 'AddTime', component: AddTime}
      ] },
      { path: 'settings', name: 'Settings', component: Settings },
    ]
  }
]

const router = new Router({
  mode: 'history',
  routes
})

new Vue({
  render: h => h(App),
  router,
  store
}).$mount('#app')
