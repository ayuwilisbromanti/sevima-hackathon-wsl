var routes = [
    {
        path : '/',
        name : 'Login',
        component : Login
    },
    {
        path :'/register',
        name : 'Register',
        component : Register
    },
    {
        path :'/chat',
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
            
        }
    }
});
app.use(router);
app.mount('#app');