<template>
    <div>
        <ul class="mui-table-view">
			<li v-for="item in newsCatalog" :key="item.id" class="mui-table-view-cell mui-media">
				<router-link :to="'/home/newscatalog/'+item.id">
					<img class="mui-media-object mui-pull-left" :src="item.img_url">
					<div class="mui-media-body">
						<h1>{{ item.title }}</h1>
						<p class='mui-ellipsis'>
                            <span>{{ item.add_time | dataFormat }}</span>
                            <span>{{ item.click }}</span>
                        </p>
					</div>
				</router-link>
			</li>
		</ul>
    </div>
</template>

<script>
    import {Toast} from 'mint-ui';
    export default{
        data(){
            return {
                newsCatalog: [],
            }
        },
        created(){
            this.getNewsCatalog();
        },
        methods:{
            getNewsCatalog(){
                this.$http.get('getNewsCatalog.php').then((result)=>{
                    if(result.body.status===0){
                        this.newsCatalog=result.body.message;
                    }else{
                        Toast('获取数据失败');
                    }
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    .mui-table-view{
        h1{
            font-size: 14px;
        };
        p{
            font-size: 12px;
            color: blue;
        };
        .mui-ellipsis{
            display: flex;
            justify-content: space-between;
        }
    }
</style>
