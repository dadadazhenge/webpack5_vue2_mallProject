import Vue from 'vue'
import App from './components/App.vue'
import MintUI from 'mint-ui'
import 'mint-ui/lib/style.css'
import './lib/mui-master/dist/css/mui.css'
import './lib/mui-master/dist/css/icons-extra.css'
import VueRouter from 'vue-router'
import router from './js/router'
import VueResource from 'vue-resource'

Vue.use(MintUI)
Vue.use(VueRouter)
Vue.use(VueResource)

Vue.http.options.root = 'http://localhost/';

//导入时间插件 然后使用过滤器规范时间格式
import  Moment from 'moment';
Vue.filter('dataFormat',function(dataStr,pattern="YYYY-MM-DD HH:mm:ss"){
    return Moment(dataStr).format(pattern);
})

var vm=new Vue({
    el : "#app",

    render: c => c(App),

    router,
})


 


