<template>
<div class="card">
                <div class="card-header">Private Chat App</div>

                <div class="card-body">

                    <div class="row">

                            <div class="col-3">

                                    <friends-component :friends="friends"></friends-component>

                            </div>

                            <div class="col-9">

                                <span v-for="friend in friends" :key="friend.id"
                                 v-if="friend.session">

                                     <message-component 
                               
                                 :friend=friend
                                 v-if="friend.session.open"

                                 ></message-component>



                                </span>
                                

                            </div>



                    </div>



                </div>
    </div>

</template>

<script>
import MessageComponent from "./chatcomponents/MessageComponent"
import FriendsComponent from './chatcomponents/FriendsComponent'

export default{
components:{MessageComponent,FriendsComponent},
data(){
    return{
        open:true,
        friends:[]
    }
},
methods:{
            close()
            {
            this.open=false
            },
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

