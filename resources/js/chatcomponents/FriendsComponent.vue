<template>
<div>

                                <ul class="list-group">
                                <li class="list-group-item" v-for="friend in friends" :key="friend.id" @click="open(friend)">{{friend.name}} </li>

                                </ul>

</div>

</template>

<script>
export default {
    props:['friends'],

data(){
    return{

    }

},
    methods:{
        open(friend)
        {
            if(friend.session)
                {
                    this.closeAll()
                    friend.session.open=true
                }
                else{
                    this.createSession(friend)
                }

        },
        createSession(friend)
        {
            axios.post('/session/create',{friend_id:friend.id}).then((res)=>{
                friend.session=res.data.data
                this.closeAll()
             //   friend.session.open=true
            })
            .catch((error)=>console.log(error))
        },
        closeAll()
        {
            this.friends.forEach(function(friend){
                friend.session.open=false
            })
        }

    },
    created(){

    }



}
</script>

<style>

</style>
