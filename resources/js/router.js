import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent";
import HoldingData from "./components/HoldingData";
import Others from "./components/Others";

Vue.use(VueRouter);

export  default new VueRouter({
    routes:[
        // {path:'/holdings/1',component: ExampleComponent},
        {path:'/holdings/:id', name: 'HoldingData',component: HoldingData,  props: true},
        {path:'/holdings/others/1', name: 'Others',component: Others}
        // {path:'/holdings/others/1',component: Others}
    ],
    mode: 'history'
})
