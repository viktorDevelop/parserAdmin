

<div id="app">
    
	<div class="container">
		

		     <div class="col-md-6">
		     		 

		     		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						       <th>фамилия</th>
			     				<th>имя</th>
			     				<th>отчество</th>
			     				<th>логин</th>
			     				<th> пароль </th>
						    </tr>
						  </thead>
						  <tbody>
						     <tr v-for=" items in usersList" @dblclick="edite(items.id)">
			     				<td>{{items.famaly}}
									<input type="text" v-model="famaly">
			     				</td>
			     				<td>{{items.name}}</td>
			     				<td>{{items.sername}}</td>
			     				<td>{{items.login}}</td>
			     				<td>{{items.password}}</td>
		     					 
		     				</tr>
						  </tbody>
						</table>


		     </div>

		     <div class="col-md-6">
		     	<input type="text" >
		     </div>

		      
	</div>
    
    


</div>


<script>
    
	var app = new Vue({

		el:'#app',
		data:{
			 usersList:[]

		},
		methods:{
			edite(id){
					alert(id)
			 	}
			},
		mounted(){
 
			      axios.post('/admin/category/GetCategory')
			      .then(response => (this.usersList = response.data)).catch(function(error){console.log(error)});
		},

			 
	});
     
</script>
