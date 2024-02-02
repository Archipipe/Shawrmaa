import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/HomeView.vue')
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/HomeView.vue')
    },    
    {
      path: '/signup',
      name: 'signup',
      component: () => import('../views/HomeView.vue')
    },
  ]
})

export default router
