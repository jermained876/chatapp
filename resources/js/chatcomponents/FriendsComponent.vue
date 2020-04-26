<template>
<div>

                                <ul class="list-group">
                                <li class="list-group-item" v-for="friend in friends" :key="friend.id">{{friend.name}}</li>
                               
                                </ul>

</div>

</template>

<script>
export default {

data(){
    return{
        friends:[]
    }

},
    methods:{

        getFriends()
        {
             axios.post('/getFriends').then((res)=>this.friends=res.data.data).catch()
           //  axios.post('/getFriends').then((res)=>console.log(res)).catch()
        }
    },
    created(){
        this.getFriends()
    }

   

}
</script>

<style>

</style>
