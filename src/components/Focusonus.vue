<template>
	<div class="resource">
		<div class="page-container-l">
			<ul class="ul-list"> 
				<li class="nav-item">
					<router-link to="../Focusonus/contactus" exact>待定</router-link>
				</li>
				<li>
					<router-link to="../Focusonus/feedback">待定</router-link>
				</li>
				<li class="nav-item">
					<router-link to="../Focusonus/webmap">待定</router-link>
				</li>
			</ul>	
		</div>	
		<div class="page-container-r">
			<router-view></router-view>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'Focusonus',
		data() {
			return {}
		},
		methods: {

		},
		mounted:function(){
			console.log(this.$route)
		}
	}
</script>

<style>
	.page-container-l{
		float: left;
	}
</style>