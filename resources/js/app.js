/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import $ from 'jquery';

require('./bootstrap');

window.Vue = require('vue');
import DataTable from 'laravel-vue-datatable';
import ViewButtonComponent from "./Components/ViewButtonComponent";
import EditButtonComponent from "./Components/EditButtonComponent";
import DeleteButtonComponent from "./Components/DeleteButtonComponent";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/DataTable.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.use(DataTable);
Vue.component('data-table-component', require('./Components/DataTableComponent').default);
Vue.component('view-button-component', require('./Components/ViewButtonComponent').default);
Vue.component('edit-button-component', require('./Components/EditButtonComponent').default);
Vue.component('delete-button-component', require('./Components/DeleteButtonComponent').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import {FormWizard, TabContent} from 'vue-step-wizard'
import 'vue-step-wizard/dist/vue-step-wizard.css'

const app = new Vue({
    el: '#app',
    data() {
        return {}
    },
    components: {
        FormWizard,
        TabContent,
        ViewButtonComponent: ViewButtonComponent,
        EditButtonComponent: EditButtonComponent,
        DeleteButtonComponent: DeleteButtonComponent,
    },
    methods: {
        displayRow(data) {
            alert(`You clicked row ${data.id}`);
        },
        viewRow(data) {
            document.body.innerHTML += '<form id="dynForm" action="http://45.77.143.238/admin/orders/' + data.id + '" method="get"></form>';
            document.getElementById("dynForm").submit();
        },
        editRow(data) {
            document.body.innerHTML += '<form id="dynForm" action="http://45.77.143.238/admin/products/' + data.id + '/edit" method="get"></form>';
            document.getElementById("dynForm").submit();
        },
        editRowAdvert(data) {
            document.body.innerHTML += '<form id="dynForm" action="http://45.77.143.238/admin/adverts/' + data.id + '/edit" method="get"></form>';
            document.getElementById("dynForm").submit();
        },
        deleteRow(data) {
            var csrf = $('meta[name="csrf-token"]').attr('content');
            $('#format').html('<form id="dynForm" action="http://45.77.143.238/admin/products/' + data.id + '" method="post"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="' + csrf + '"></form>')
        },
        deleteRowUser(data) {
            var path = window.location.href;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            $('#format').html('<form id="dynForm" action="http://localhost/alhujen/public/admin/users/' + data.id + '" method="post"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="' + csrf + '"></form>')
        },


        viewRequest(data) {
            document.body.innerHTML += '<form id="dynForm" action="http://localhost/alhujen/public/admin/requests/' + data.id + '" method="get"></form>';
            document.getElementById("dynForm").submit();
        },
    },
});
