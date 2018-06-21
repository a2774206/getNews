<template>
	<ul>
    		
    	<li v-for="i in msg" style="clear: both;">
    		<p style="float: left;margin-right: 15px;"><img :src="i.imgurl"/></p>
    		<a :href="i.url" target="_blank">{{i.title}}</a>
    		<p><span style="display: inline-block;;margin-right: 30px;color: #999;">{{i.date}}</span></p>
    		
    	</li>
    </ul>
</template>

<script>
	export default {
		name: 'unit',
		data() {
			return {
				msg: ''
			}
		},
		methods: {
			getData() {
				let state = this.$store.state.qq;
				this.msg = state;
				
			}
		},
		mounted() {
			this.getData();

		},
		watch: {
			'$store.state.qq': {
				handler(curVal, oldVal) {
					
					console.log(this.$store.state.qq)
					//console.log(curVal);
					this.getData();　　　
				},
				deep: true
			}

		}
	}
</script>

<style scoped="">
	h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
  float: left;
  
}
li {
line-height: 30px;
  display: block;
  margin: 0 10px;
}
a {
  color: #all;
  text-decoration: none;
}
img{
	width: 100px;
}
</style>