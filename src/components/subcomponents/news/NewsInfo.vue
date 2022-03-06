<template>
    <div class="newsInfo_container">
        <h1>{{ this.newsInfo.title }}</h1>
        <p>
            <span>发表时间: {{ newsInfo.add_time | dataFormat }}</span>
            <span>点击 {{ newsInfo.click }}次</span>
        </p>
        <hr>
        <p>{{  newsInfo.content }}</p>
    </div>
</template>

<script>
    import {Toast} from 'mint-ui'
    export default {
        data(){
            return {
                newId: this.$route.params.id,
                newsInfo: [],
            }
        },

        created(){
            this.getNewsInfo();
        },

        methods:{
            getNewsInfo(){
                this.$http.get('getNewsInfo'+this.newId+'.php').then((result)=>{
                    if(result.body.status===0){
                        this.newsInfo=result.body.message;
                    }else{
                        Toast('获取数据失败')
                    }
                })
            }
        }
    }
    
</script>

<style lang="scss" scoped>
    .newsInfo_container{
        padding: 0px 10px;
        h1{
             font-size: 14px;
             text-align: center;
             color: red;
        };
        p{
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: blue;
        }
    }
</style>