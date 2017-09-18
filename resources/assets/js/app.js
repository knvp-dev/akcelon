
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');
 var VueScrollTo = require('vue-scrollto');

// You can also pass in the default options
Vue.use(VueScrollTo, {
     container: "body",
     duration: 500,
     easing: "ease",
     offset: -118,
     cancelable: true,
     onDone: false,
     onCancel: false,
     x: false,
     y: true
 });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


 const app = new Vue({
 	el: '#app',
   data:{
      formdata: {
         name : "",
         email: "",
         subject: "",
         message: ""
      },
      success: false
   },
   methods:{
      sendForm(){
         axios.post('/contact', this.formdata).then((response) =>  {
            console.log(response);
            this.formdata = {};
            this.success = true;
         });
      }
   }
});
