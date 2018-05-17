import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/home/Home'

// const Categories = resolve => {
//     require.ensure(['./components/categories/Categories.vue'], () => {
//         resolve(require('./components/categories/Categories.vue'));
// });
// };

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    }
  ]
})
