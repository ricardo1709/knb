
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(require('vue-resource'));

Vue.component('posts', require('./components/posts.vue'));

Vue.component('post', require('./components/post.vue'));

Vue.component('create-post-form', require('./components/create-post.vue'));

Vue.component('house-rankings', require('./components/house-rankings.vue'));


const app = new Vue({
    el: '#app',
    data: {
        imgPath: "http://localhost:8000/img/"
    }
});

