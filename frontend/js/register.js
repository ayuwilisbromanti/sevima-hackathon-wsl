var Register = {
    template :`
    <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form>
                  <div class="form-group">
                    <label>Name</label>
                    <input v-model="username" type="text" class="form-control p_input text-light">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input v-model="name" type="text" class="form-control p_input text-light">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input v-model="password" type="password" class="form-control p_input text-light">
                  </div>
                  <div class="text-center">
                    <a type="button" v-bind:href="'#/chat'"  class="btn btn-primary btn-block enter-btn">Login</a>
                  </div>
                </form>
              </div>
            </div>`
}