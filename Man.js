
var myApp = {
    data(){
        return{
            isL1Active:true,
            isL2Active : false,
            isL3Active : false,
        }
    }
}
Vue.createApp(myApp).mount('#app');