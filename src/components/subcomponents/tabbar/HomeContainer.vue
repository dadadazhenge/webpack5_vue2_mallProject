<template>
    <div>
        <!-- 轮播图 -->
        <mt-swipe :auto="10000">
          <mt-swipe-item v-for="item in lunboData" :key="item.url">
              <img class="img_lunbo" :src="item.img" alt="">
          </mt-swipe-item>
        </mt-swipe>
        <!-- 6宫格 -->
         <ul class="mui-table-view mui-grid-view mui-grid-9">
		    <router-link to="/home/newscatalog" class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><a href="#">
		        <img :src="menu1Url" alt="">
		        <div class="mui-media-body">新闻资讯</div></a></router-link>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><a href="#">
		        <img :src="menu2Url" alt="">
		        <div class="mui-media-body">图片分享</div></a></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><a href="#">
		        <img :src="menu3Url" alt="">
		        <div class="mui-media-body">商品购买</div></a></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><a href="#">
		       <img :src="menu4Url" alt="">
		        <div class="mui-media-body">留言反馈</div></a></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><a href="#">
		        <img :src="menu5Url" alt="">
		        <div class="mui-media-body">视频专区</div></a></li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"><a href="#">
		        <img :src="menu6Url" alt="">
		        <div class="mui-media-body">联系我们</div></a></li>
		</ul> 
    </div>
</template>

<script>
    // import Data from '../../../js/data.js';
    import { Toast } from 'mint-ui';
    export default{
        data(){
            return {
                lunboData: [],
                menu1Url: '../../../img/menu1.png',
                menu2Url: '../../../img/menu2.png',
                menu3Url: '../../../img/menu3.png',
                menu4Url: '../../../img/menu4.png',
                menu5Url: '../../../img/menu5.png',
                menu6Url: '../../../img/menu6.png',
            }
        },

        created(){
            this.getLunbo();
        },

        methods: {
            getLunbo(){
                this.$http.get("getLunbo.php").then(result=>{
                    if(result.body.status===0){
                        this.lunboData=result.body.message;
                    }
                    else{
                        Toast('获取数据失败');
                    }
                })
                // this.lunboData=Data.getLunbo(); 请求服务器失效，然后模拟的数据
            }
        }
    }
</script>

<style lang="scss" scoped>
    .mint-swipe{
        height: 200px;
        .mint-swipe-item{
            .img_lunbo{
                width: 100%;
                height: 100%;
            }
        }
    }

    .mui-grid-view.mui-grid-9{
        background-color: #fff;
    }

    .mui-grid-view.mui-grid-9{
        border: 0;
    }

    .mui-grid-view.mui-grid-9 .mui-table-view-cell{
        border: 0;
    }

    img{
        width: 60px;
        height: 60px;
    }
</style>