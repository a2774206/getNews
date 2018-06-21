<template>
	<div class="resource">
		<div class="page-container-l">
			<ul class="ul-list"> 
				<!--<li class="nav-item">
					添加广告服务时修改Resource中的默认路由,修改app.vue中的变量luyou中的unit改为advert
					<router-link to="../resource/advert" exact>广告服务</router-link>
				</li>-->
				<li class="nav-item">
					<router-link to="../resource/unit">文章（适合公众号）<span style="color: red;">*</span></router-link>
				</li>
				<li class="nav-item">
					<router-link to="../resource/applications">每日新闻</router-link>
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
		name: 'Resource',
		data() {
			return {}
		},
		methods: {

		}
	}
</script>

<style>
	.page-container-l{
		float: left;
	}
</style>