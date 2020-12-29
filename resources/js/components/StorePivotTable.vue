<template>
    <div>
        <button class="btn btn-primary mt-3" @click="saveHolding" v-text="buttonText"></button>
    </div>
</template>

<script>
import axios from 'axios';


    export default {
        name: "store-table",
        props: {
            holdingId: String,
            userId: String,
            removestatus: String,
        },

        mounted() {
            //console.log('Component mounted.')

              axios.get('https://api.coindesk.com/v1/bpi/currentprice.json')
                .then(response => {
                this.info = response
                console.log(response.data);

                })
        },

        data(){
            return{
                flagHolding: this.removestatus,
                info: null,
            }
        },

        methods: {
            saveHolding(){
                axios.post('/save/' + this.holdingId+'/'+this.userId)
                    .then(response =>{
                       //this.flagHolding = ! this.flagHolding;
                        this.flagHolding = ! JSON.parse(this.flagHolding);
                        console.log(response.data);
                    })
            }
        },

        computed: {
            buttonText(){
                let bln=JSON.parse(this.flagHolding);
               return bln
                   ? 'Remove'
                   : 'Add';
            }
        }
    }
</script>
