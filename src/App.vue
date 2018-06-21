<template>
  <div id="app">
	  <div class="header">
			<div class="container">
				<h1>
					<a href="http://www.lipengpeng.com" style="color: #fff;">
						<img src="./assets/logo_.png" style=" vertical-align: middle" width="170" >
							
					</a>
				</h1>
				<ul class="nav">
					<li v-for="(i,item) in act" v-on:click="active(item)" :item="item">
						<!--<a href="javascript:void(0)" :class="{ 'bold': item == index }" >{{i}}</a>-->
						<router-link :to="'../'+luyou[item]" :class="{ 'bold': item == index }">
							{{i}}
						</router-link>
						
					</li>
				</ul>
			</div>
		</div>
		<!--head_end-->
		
		<!--内容开始-->
		<div class="container_center">
			<router-view>
			
			</router-view>
		</div>
		<!--内容结束-->
		<div class="footer">
			仅供个人学习使用，如果侵犯了您的权益，请立即和我联系，马上删除<a target=blank href="tencent://message/?uin=2774206&Site=lipengpeng&Menu=yes"><img border="0" SRC="http://wpa.qq.com/pa?p=1:2774206:9" alt="点击这里给我发消息"></a>
			<br />
			
		</div>
		<!--bottom-->
		
  </div>
</template>

<script>

export default {
  name: 'app',
  data () {
    return {
      ImageUrl: 'src/assets/4.png',
      act:['中国首都网','新浪网','腾讯网','新华网'],
      luyou:['directory/design','ComponentA/helpcenter','resource/unit','Focusonus/contactus',],
      index:0
    }
  },
  methods:{
  	active:function(item) {
  		//导航样式切换
  		this.bold=!this.bold;
  		this.index=item;
		},
		openFullScreen2() {
        const loading = this.$loading({
          lock: true,
          text: 'Loading',
          spinner: 'el-icon-loading',
          background: 'rgba(0, 0, 0, 0.7)'
        });
        setTimeout(() => {
          loading.close();
        }, 2000);
      },
		getData(){
			//千龙网
			this.axios({
  			method:'post',
  			url:'https://lipengpeng.com/Code/api/index.php',
  		}).then(res=>{
  			let state = this.$store.state.qianlong;
			state.day = res.data[0].news;
  			state.beijing = res.data[1].todaynews;
  			state.china = res.data[2].china;
  			state.world = res.data[3].world;
    		//console.log(res.data)
  		})
  		//新浪网
  		this.axios({
  			method:'post',
  			url:'https://lipengpeng.com/Code/api/weibo.php',
  		}).then(res=>{
  			let state = this.$store.state.xinlang;
				state.day = res.data[0].news;
  			state.china = res.data[1].china;
  			state.world = res.data[2].world;
    		//console.log(res.data)
  		})
  		//腾讯网
  		this.axios({
  			method:'get',
  			url:'https://lipengpeng.com/Code/api/qq.php'
  			
  		}).then(res=>{
				let state = this.$store.state.qq;
	//				state.day = res.data[0].news;
	//			state.china = res.data[1].china;
	//			state.world = res.data[2].world;
				var s = res.data.slice(0,-65);
				var str = JSON.parse(s).result.articles;
				this.$store.state.qq = str;
    		
  		})
  		//腾讯2
  		this.axios({
  			method:'post',
  			url:'https://lipengpeng.com/Code/api/qqday.php'
  			
  		}).then(res=>{
//				let state = this.$store.state.qq1;
				 this.$store.state.qq1=res.data.data;
	//				state.day = res.data[0].news;
	//			state.china = res.data[1].china;
	//			state.world = res.data[2].world;
				console.log(this.$store.state.qq1);
    		
  		})
  		
  	}
  },
  mounted(){
  	this.getData();
  	setTimeout(()=>{
  		/*防止图片不出*/
  		this.getData();
  	},3000)
  	setInterval(()=>{
  		this.getData();
  	},60000)
  },
  created(){
  	this.openFullScreen2()
  }
}
</script>
<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align:left;
  color: #2c3e50;
}
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
  /*color: #404040;*/
}

.bold{
	font-weight: bold;
	display: inline-block;
}
.header{
	background: #20a0ff;
	height: 80px;
	line-height: 80px;

}
.container{
	  width: 1140px;
    padding: 0 30px;
    margin: 0 auto;
   
}
.container h1{
	float: left;
}
.container a img{
	vertical-align: sub;
}
.nav{
	float: right;
}
.nav li{
	
	position: relative;
	text-align: center;
	width: 105px;
}
.nav li a{
	color: #ffffff;
	text-decoration: none;
	opacity: 0.9;
	display: inline-block;
	width: 100%;
	height: 100%;
}
.nav li .bold::before{
	position: absolute;
	content: " ";
	display: inline-block;
	width: 100%;
	height: 3px;
	background: #99d2fc;
	left: 0;
	bottom: 0;
}
.nav li a:hover{
	opacity: 1;
}
.nav li a{
	display: inline-block;
	width: 100%;
	height: 100%;
}
.footer{
	text-align: center;
	color: #fff;
	background: #324057;
	height: 80px;
	line-height: 80px;

	
}






.container_center .router-link-active{
	color: #20A0FF;
}
h2:first-child{
	margin-bottom: 20px;
}
.resource{
	padding: 55px 30px 20px;
	width: 1140px;
	margin: 0 auto;
	 overflow: hidden;
}
.page-container-l{
		float: left;
		width: 194px;
		overflow: hidden;
}
.page-container-r{
	float: right;
	width: calc(1140px - 194px);
}
.ul-list li a{
	color: #000;
	text-decoration: none;
}
.ul-list li{
	font-size: 16px;
	float: none;
	width: 100%;
	line-height: 30px;
	height: 30px;
	margin: 5px 0;
}
</style>
