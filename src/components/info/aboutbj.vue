<template>
	<div>
	<ul>
    	<li v-for="i in msg" >
    		<a :href="i.url" target="_blank">{{i.title}}</a>
    		<span style="display: inline-block;float: left;margin-right: 30px;color: #999;">{{i.time}}</span>
    	</li>
    </ul>
	</div>
</template>

<script>
export default {
  name: 'index',
  data () {
    return {
      msg:''
    }
  },
  methods:{
  	getData(){
  		let state = this.$store.state.qianlong;
		
		this.msg = state.beijing;

  	}
  },
  mounted(){
  	this.getData();
  	
  },
   watch: {
	'$store.state.qianlong': {
		handler(curVal,oldVal){
			
			this.getData();
　　　},
　　　deep:true
	}

  }
}
</script>

<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
  float: left;
  
}
li {
line-height: 40px;
  display: block;
  margin: 0 10px;
}
a {
  color: #all;
  text-decoration: none;
}
</style>