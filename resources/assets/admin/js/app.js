
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


try {
	global.$ = global.jQuery = require('jquery');
     require('bootstrap');
} catch (e) {}


global.axios = require('axios');

global.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  global.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}




global.Vue = require('vue');

var VueResource = require('vue-resource');

Vue.use(VueResource);

global.PNotify = require('pnotify');



import 'pnotify/dist/pnotify.css';
import 'pnotify/dist/pnotify.brighttheme.css';
import 'pnotify/dist/pnotify.buttons.css';
import 'pnotify/dist/pnotify.buttons.js';
import 'pnotify/dist/pnotify.confirm.js';


PNotify.prototype.options.styling = "bootstrap3";
PNotify.prototype.options.styling = "fontawesome";
PNotify.prototype.options.delay = 3500;


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs..
 */
