var Login = {
    template :`
    <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form>
                  <div class="form-group">
                    <label>Username *</label>
                    <input v-model="username" type="text" class="form-control p_input text-dark">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input v-model="password" type="password" class="form-control p_input text-dark">
                  </div>
                  <div class="text-center">
                    <a type="button" v-bind:href="'#/chat'"  class="btn btn-primary btn-block enter-btn">Login</a>
                  </div>
                  <div class="text-center">
                    <a v-on:click="login()"  class="text">Belum punya akun?</a>
                  </div>
                </form>
              </div>
            </div>`,
    

    data(){
        return{
            username : '',
            password : '',
            status : false
        }
    },

    methods:{
        async login(){
            var data ={
                email : this.email,
                password : this.password,
                id_user
            };

            var login = await axios.post("http://localhost/sevima-hackathon/backend/public/api/login", data);
            console.log(login.data);
            this.status = login.data.status;
            if(this.status == true){
                this.$router.replace({name : "Chat"});
            }else{
                alert ("Gagal Login!");
                this.$router.replace({name:"Login"});
            }
        }
    }
}