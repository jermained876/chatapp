<template>
<div class="card">
                <div class="card-header">Private Chat App</div>

                <div class="card-body">

                    <div class="row">

                            <div class="col-3">

                                    <friends-component></friends-component>

                            </div>

                            <div class="col-9">

                                 <message-component v-if="open"
                                 @close="close"
                                 >/</message-component>


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
        open:true
    }
},
methods:{
close()
{
this.open=false
}
},
created(){
   BusEvent.$on('closechat')
}

}

</script>

