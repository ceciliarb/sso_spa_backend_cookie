import Vue from 'vue'
import VueRouter from 'vue-router'

import store from 'plugin-vuejs-keycloak'
import security from 'plugin-vuejs-keycloak/security'

import ExampleComponent from './components/ExampleComponent'
import InfoUsuario from './components/InfoUsuario'
import Unauthorized from './components/Unauthorized'
import Error404 from './components/Error404'

Vue.use(VueRouter)

const routes = [
    {
        path: '/home',
        name: 'home',
        component: ExampleComponent,
        meta: {
            requiresAuth: true,
            roles: ['simples']
        }
    },
    {
        path: '/info',
        name: 'info',
        component: InfoUsuario,
        meta: {
            requiresAuth: true,
            roles: ['simples']
        }
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

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth) {
        const auth = store.state.security.auth
        if (!auth.authenticated) {
            security.init(next, to.meta.roles)
        } else {
            if (to.meta.roles) {
                if (security.roles(to.meta.roles[0])) {
                    next()
                } else {
                    next({
                        name: 'unauthorized'
                    })
                }
            } else {
                next()
            }
        }
    } else {
        next()
    }
})

export default router;

