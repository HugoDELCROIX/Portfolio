import { createRouter, createWebHistory } from 'vue-router'
import IndexVue from './views/IndexVue.vue'
import NavigationVue from './views/NavigationVue.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: IndexVue
  },
  {
    path: '/menu',
    name: 'menu',
    component: NavigationVue
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
