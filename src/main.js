// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-default/index.css';
import store from './store'
//import Directory from './components/directory';
//const Directory = r => require(['./components/directory.vue'], r);
import axios from 'axios'
Vue.prototype.axios = axios;
Vue.use(ElementUI);
Vue.config.productionTip = false
/* eslint-disable no-new */
//new Vue({
//el: '#app',
//router,
//template: '<App/>',
//components: { App }
//})
new Vue({
    el: '#app',
    router,
    store,
    render: c => c(App)
})
