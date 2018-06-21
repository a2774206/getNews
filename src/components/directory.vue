<template>
	<div class="resource">
		<div class="page-container-l">
			<ul class="ul-list"> 
				<li class="nav-item">
					<router-link to="../directory/design" exact>今日热闻</router-link>
				</li>
				<li class="nav-item">
					<router-link to="../directory/aboutbj">今日北京<span style="color: red;"> *</span></router-link>
				</li> 
				<li class="nav-item">
					<router-link to="../directory/aboutus">今日中国</router-link>
				</li>
				<li class="nav-item">
					<router-link to="../directory/joinus">今日世界</router-link>
				</li>
				
			</ul>	
		</div>	
		<div class="page-container-r">
			<h4 style="margin-bottom: 20px;color: #999;">首都网特点:("今日北京" 每日更新最早、"世界新闻" 每日更新较多、新闻内图片较少、内容基本简短)</h4>
			<router-view></router-view>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'source',
		data() {
			return {
			}
		},
		methods: {
			
		}
	}
</script>

<style scoped>
	
</style>