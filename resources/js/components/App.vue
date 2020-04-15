<template>
   <div>
       <div class="row justify-content-center pt-4">
      <ul style="display:flex; font-size: 1.5em">
          <li ><router-link  :to="{name: 'HoldingData', params: { id },  }" >Holding Data</router-link></li>
          <li style="padding: 0 4em">|</li>
          <li ><router-link :to="{name: 'Others', params: { id }, }">   Others</router-link></li>
      </ul>
       </div>
       <router-view v-bind="myProps"></router-view>
   </div>
</template>

<script>
    import HoldingData from "./HoldingData";
    import Others from "./Others";
    export default {
        name: "App",
        // components: {HoldingData},
        component: {
            HoldingData,
            Others,
        },
        props: {
            holdings: Array,
            // holdingsOthers: Array,
            id: Number,
            can: Boolean,
        },
        computed: {
            myProps() {
                // if (this.$route.name === 'HoldingData') {
                    return {
                        holdings: this.holdings,
                        can: this.can,
                    }
                // }
                // if (this.$route.name === 'Others') { return { holdings: this.holdingsOthers }}
            }
        },

        methods: {
            onHoldingClick(){

            }
        },
        mounted() {
            console.log(this.id)
        },

    }
</script>

<style scoped>

</style>
