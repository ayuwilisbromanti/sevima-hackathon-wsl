var routes = [
    {
        path : '/',
        name : 'Chat',
        component : Chat
    }
];

var router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes,
});
var app = Vue.createApp({
    data(){
        return{
            title:"Welcome to Lalaundry"
        }
    }
});
app.use(router);
app.mount('#app');