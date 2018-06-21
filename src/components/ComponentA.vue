<template>
	<div class="resource">
		<div class="page-container-l">
			<ul class="ul-list"> 
				<li class="nav-item">
					<router-link to="../ComponentA/helpcenter" exact>社会新闻</router-link>
				</li>
				<li class="nav-item">
					<router-link to="../ComponentA/linkus" >国内消息</router-link>
				</li>
				<li class="nav-item">
					<router-link to="../ComponentA/world" >国际新闻</router-link>
				</li>
				
			</ul>	
		</div>	
		<div class="page-container-r"> 
			<h4 style="margin-bottom: 20px;color: #999;">新浪网特点：(政治新闻较多、国际新闻更新及时、基本有图且内容简短)</h4>
			<router-view></router-view>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'tory',
		data() {
			return {
			}
		},
		methods: {
			
		}
	}
</script>

<style>
</style>