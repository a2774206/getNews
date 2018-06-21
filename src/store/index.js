import Vue from 'vue'
import vuex from 'vuex'
Vue.use(vuex)
export default new vuex.Store({
	state:{
		qianlong:{
			day:'',
			beijing:'',
			china:'',
			world:''
		},
		xinlang:{
			day:'',
			china:'',
			world:''
		},
		qq:[],
		qq1:{}
	}
})
