import Vue from 'vue'
import VueRouter from 'vue-router'

import ExampleComponent from './components/ExampleComponent'
import InfoUsuario from './components/InfoUsuario'
import Unauthorized from './components/Unauthorized'
import Error404 from './components/Error404'

Vue.use(VueRouter)

const routes = [{
        path: '/home',
        name: 'home',
        component: ExampleComponent,
    },
    {
        path: '/info',
        name: 'info',
        component: InfoUsuario,
    },
    {
        path: '*',
        component: Error404
    }, // Not found
    {
        path: '/unauthorized',
        name: 'Unauthorized',
        component: Unauthorized
    } // Unauthorized
]

const router = new VueRouter({
    mode: 'history',
    scrollBehavior: () => ({
        y: 0
    }),
    routes
})

export default router;
