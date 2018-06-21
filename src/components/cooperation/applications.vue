<template>
	<div>
	<ul>
    	<li v-for="(i,item) in msg" v-if="item!=0" :key="item">
    		<a :href="'https://www.toutiao.com/a'+i.group_id" target="_blank">{{i.title}}</a>
    		<span style="display: inline-block;float: left;margin-right: 30px;color: #999;">{{i.date}}</span>
    	</li>
    </ul>
	</div>
</template>

<script>
export default {
  name: 'applications',
  data () {
    return {
      msg:''
    }
  },
  methods:{
  	getData(){
  		let state = this.$store.state.qq1;
		
		this.msg = state;

  	}
  },
  mounted(){
  	this.getData();
  	
  },
   watch: {
	'$store.state.qq1': {
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