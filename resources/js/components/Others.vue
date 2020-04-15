<template>

<div>

    <div  class="row justify-content-centerpt-4">
        <div class="col-xs-12 col-sm-12 col-lg-12 pt-3">
            <p/>
        </div></div>
    <div class="row justify-content-center" style="background-color: lightgray">
        <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Amount Invested</div>
        <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Interest Rate</div>
        <div class="col-xs-2 col-sm-2 col-lg-2 border font-weight-bold" >Fortnight Return</div>
        <div class="col-xs-3 col-sm-3 col-lg-3 border font-weight-bold" >Client Account</div>
        <div class="col-xs-3 col-sm-3 col-lg-3 border font-weight-bold" >Bank Name</div>
    </div>

    <div class="row justify-content-center" v-for="item in dataHoldings" style="background-color: lightgray">
        <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{ item.Amount_Invested }}</div>
        <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{ item.Interest_Rate }}</div>
        <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{ item.Fortnight_Return }}</div>
        <div class="col-xs-3 col-sm-3 col-lg-3 border" >{{ item.Client_Account }}</div>
        <div class="col-xs-3 col-sm-3 col-lg-3 border" >{{ item.Bank_Name }}</div>
    </div>
</div>
</template>

<script>
    export default {
        name: "Others",
        props: ['holdings'],
        data(){
            return {
                dataHoldings: this.holdings,
            }
        },
        mounted() {
            console.log("bitch")
            console.log(this.dataHoldings)
        }
    }
</script>

<style scoped>

</style>
