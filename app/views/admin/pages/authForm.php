
<div id="app-auth"> 
<div class="container d-flex justify-content-center">
  <div class="col-md-5">
     
      <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" v-model="login">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" v-model="password">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" @click="auth" >Sign in</button>
     
 </div>
</div>

</div>

<script>
  
  var app = new Vue({

    el:'#app-auth',

    data:{
        login:null,
        password:null
    },

    methods:{


      auth(){

        
        axios.post('/admin/admin/Auth',{"login":this.login,'password':this.password})
            .then(response => (window.location.href = "/admin/index/")).catch(function(error){console.log(error)});


      }




    }
  });
</script>