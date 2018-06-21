<template>
  <div class="index">
    <ul>
    		
    	<li v-for="i in msg" >
    		<a :href="i.url" target="_blank" >{{i.title}}</a>
    		<span style="display: inline-block;float: left;margin-right: 30px;color: #999;">{{i.time}}</span>
    	</li>
    </ul>
   <!--<ul>
   		<h2>今日北京</h2>
    	<li v-for="i in msg.daybj" >
    		<p><a :href="i.url" target="_blank">{{i.title}}</a><span>{{i.time}}</span></p>
    	</li>
    </ul>
    <ul>
    		<h2>中国</h2>
    	<li v-for="i in msg.dayzg" >
    		<p><a :href="i.url" target="_blank">{{i.title}}</a><span>{{i.time}}</span></p>
    	</li>
    </ul>
     <ul>
     	<h2>世界</h2>
    	<li v-for="i in msg.daysj" >
    		<p><a :href="i.url" target="_blank">{{i.title}}</a><span>{{i.time}}</span></p>
    	</li>
    </ul>-->
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
		this.msg = state.day;
//		this.msg.daybj = state.beijing;
//		this.msg.dayzg = state.china;
//		this.msg.daysj = state.world;
		//console.log(res.data)
  	}
  },
  mounted(){
  	this.getData();
  	
  },
  watch: {
	'$store.state.qianlong': {
		handler(curVal,oldVal){
//			alert(1);
			this.getData();
　　　},
　　　deep:true
	}

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
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
