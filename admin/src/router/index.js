import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/home/Home'

const Login = resolve => {
    require.ensure(['@/components/auth/Login.vue'], () => {
        resolve(require('@/components/auth/Login.vue'));
});
};

const News = resolve => {
    require.ensure(['@/components/news/List.vue'], () => {
        resolve(require('@/components/news/List.vue'));
});
};

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
        path: '/news',
        name: 'news',
        component: News
    }
  ]
})
