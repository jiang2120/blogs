/*
 |-------------------------------------------------------------------------------
 | routes.js
 |-------------------------------------------------------------------------------
 | Contains all of the routes for the application
 */

/**
 * Imports Vue and VueRouter to extend with the routes.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

/**
 * Extends Vue to use Vue Router
 */
Vue.use( VueRouter )

/**
 * Makes a new VueRouter that we will use to run all of the routes for the app.
 */
export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            components: Vue.component(
                'Home',
                require( './pages/Home.vue' )
            )
        },
        {
            path: '/',
            name: 'home',
            components: Vue.component(
                'Home',
                require( './pages/Home.vue' )
            )
        },
        {
            path: 'articles/:id',
            name: 'article',
            component: Vue.component(
                'Article',
                require( './pages/articles/ArticleShow.vue' )
            )
        },
        {
            path: '*',
            name: 'error',
            components: Vue.component(
                'error',
                require( './pages/Error/404' )
            )
        }
    ]
});
