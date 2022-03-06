import VueRouter from 'vue-router'

import HomeContainer from '../components/subcomponents/tabbar/HomeContainer.vue'
import MemberContainer from '../components/subcomponents/tabbar/MemberContainer.vue'
import ShopcarContainer from '../components/subcomponents/tabbar/ShopcarContainer.vue'
import SearchContainer from '../components/subcomponents/tabbar/SearchContainer.vue'
import NewsCatalog from '../components/subcomponents/news/NewsCatalog.vue'
import NewsInfo from '../components/subcomponents/news/NewsInfo.vue'

var router=new VueRouter({
    routes: [
        {path: '/', redirect: '/home'},
        {path: '/home',component: HomeContainer},
        {path: '/member',component: MemberContainer},
        {path: '/shopcar',component: ShopcarContainer},
        {path: '/search',component: SearchContainer},
        {path: '/home/newscatalog',component: NewsCatalog},
        {path: '/home/newscatalog/:id', component: NewsInfo},
    ],

    linkActiveClass: "mui-active",
})

export default router;