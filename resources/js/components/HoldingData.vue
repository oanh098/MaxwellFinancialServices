<!--<template v-for="item in dataHoldings">-->
<template>
   <div>

       <div  class="row justify-content-center pt-4">
           <div class="col-xs-12 col-sm-12 col-lg-12 pt-3" style="text-align: left;padding-left: 100px; font-size: 1.2em"  v-if="can === true">
               <p ><a href="/holdings/user/create">Add new Holding</a> </p></div>

<!--           <div class="col-xs-6 col-sm-6 col-lg-6"><h1>Holdings Data</h1></div>-->
       </div>


       <div class="row justify-content-center">
           <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >No</div>
           <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Date</div>
           <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Name</div>
           <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Code Units</div>
           <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Registered Units</div>
           <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Available Units</div>
           <div class="col-xs-1 col-sm-1 col-lg-1 border font-weight-bold" >Reversed Units</div>
           <div class="col-xs-2 col-sm-2 col-lg-1 border font-weight-bold" >Purchase Price</div>
           <div class="col-xs-2 col-sm-2 col-lg-1 border font-weight-bold" >Total Value</div>
       </div>



       <div class="row justify-content-center" v-for="item in dataHoldings">
           <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{ item.id }}</div>
           <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{ item.Date }}</div>


           <div class="col-xs-2 col-sm-2 col-lg-2 border"  v-if="can === true">
               <a :href="`/holdings/shows/` +  item.id ">
                   {{ item.Holding_Name }}
               </a>
           </div>

           <div class="col-xs-2 col-sm-2 col-lg-2 border"  v-if="can === false">
                   {{ item.Holding_Name }}
           </div>

           <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{ item.Code_Units }}</div>
           <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{ item.Registered_Units }}</div>
           <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{ item.Available_Units }}</div>
           <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{ item.Reversed_Units }}</div>
           <div class="col-xs-2 col-sm-2 col-lg-1 border" >{{ item.Purchase_Price }}</div>
           <div class="col-xs-2 col-sm-2 col-lg-1 border" >{{ item.Total_Value }}</div>
       </div>


   </div>
</template>

<script>
    export default {
        name: 'HoldingData',
        props: ['holdings', 'can'],
        // props: ['dataHoldings'],
        // props:{
        //     // msg: String
        //     holdings: Array
        // },
           // [ pHoldings: Array,]

        // },
        data(){
            return {
                dataHoldings: this.holdings,
            }
        },

        mounted() {
            // console.log( this.holdings)
            console.log(this.dataHoldings)
            // if (this.msg) {
            //     this.welcome = this.msg
            //     console.log('success')
            // }
        }

    }
</script>

<style scoped>

</style>
