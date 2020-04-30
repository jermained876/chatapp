<template>

<div class="card">
                                    <div class="card-header">
                                         <span  :class="{'text-danger':block_session}">{{friend.name}}</span>
                                            <span v-if="block_sesion">(Blocked)</span>




                                        <a href="" @click.prevent="close">
                                        <i class="fa fa-times float-right" aria-hidden="true"></i>
                                        </a>





         <i class="fa fa-ellipsis-v float-right mr-3" aria-hidden="true" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    </i>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" v-if="block_session" href="#" @click.prevent="block">Unblock</a>
    <a class="dropdown-item" v-else href="#" @click.prevent="block">Block</a>

    <a class="dropdown-item" href="#" @click.prevent="clear">Clear</a>

  </div>








                                    </div>
                                    <div class="card-body chatbox" v-chat-scroll >
                                        <p class="card-text" v-for="chat in chats" :key="chat.message">

                                                {{chat.message}}
                                        </p>

                                    </div>
                                    <div class="card-footer">

                                    <form action="" @submit.prevent="send">
                                        <div class="form-group">
                                            <input type="text" v-model="newmessage" class="form-control" :disabled="block_session" placeholder="Type your message here" >
                                       <button type="submit" class="mt-2 btn btn-block btn-primary" :disabled="block_session">Send</button>

                                       </div>

                                    </form>


                                    </div>


</div>

</template>

<script>
export default {
    props:['friend'],

data(){
    return{
        chats:[],
        newmessage:'test',
        block_session: false
    }
},
methods:{
                send()
                {
                this.chats.push({message:this.newmessage})
                console.log('pass')
                },
                close(){
                    console.log('close')
                    console.log(this.friend.session)
                this.friend.session.open=false
                //this.$emit('close')
                    //console.log('closerrr')
                },
                clear()
                {
                    this.chats=[]
                },
                block(){
                    this.block_session=!this.block_session
                    console.log(this.block_session)
                }

},
created(){
this.chats.push({message:'hey'},
{message:'i am jermaine'}

)
}

}
</script>

<style scoped>
.chatbox{
    height: 300px;
}
.chatbox{
    overflow-y: auto;
}

</style>
