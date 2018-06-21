<template>
	<ul>
		<li v-for="i in msg">
			<a :href="i.url" target="_blank">{{i.title}}</a>
			<span style="display: inline-block;float: left;margin-right: 30px;color: #999;">{{new Date().toLocaleString().slice(0,new Date().toLocaleString().indexOf(' '))}}</span>
		</li>
	</ul>
</template>

<script>
	export default {
		name: 'index',
		data() {
			return {
				msg: ''
			}
		},
		methods: {
			getData() {
				let state = this.$store.state.xinlang;
				this.msg = state.day;
				//		this.msg.daybj = state.beijing;
				//		this.msg.dayzg = state.china;
				//		this.msg.daysj = state.world;
				//console.log(res.data)
			}
		},
		mounted() {
			this.getData();

		},
		watch: {
			'$store.state.xinlang': {
				handler(curVal, oldVal) {
					//			alert(1);
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
line-height: 40px;
  display: block;
  margin: 0 10px;
}
a {
  color: #all;
  text-decoration: none;
}
</style>