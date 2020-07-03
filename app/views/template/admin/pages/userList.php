

<div id="app">
    
	<div class="container d-flex flex-wrap ">
		
			 <div class="col-md-6">
		     	 	<div class="form-group">
				    <label for="formGroupExampleInput"> фамилия </label>
				    <input type="text" class="form-control" id="formGroupExampleInput" v-model="userFamaly">
				  </div>
				  <div class="form-group">
				    <label for="formGroupExampleInput2">   имя </label>
				    <input type="text" class="form-control" id="formGroupExampleInput2" v-model="userName" >
				  </div>
				   <div class="form-group">
				    <label for="formGroupExampleInput2">   отчество  </label>
				    <input type="text" class="form-control" id="formGroupExampleInput2" v-model="userSername" >
				  </div>
				   <div class="form-group">
				    <label for="formGroupExampleInput2">   логин  </label>
				    <input type="text" class="form-control" id="formGroupExampleInput2"  v-model="userLogin" >
				  </div>

				  <div class="form-group">
				     <button v-if="addBtnShow" @click="add" class="form-control btn btn-primary">добавить</button>
				  </div>

				  <div class="form-group">
				    	<button v-if="editeBtnShow" class="form-control btn btn-primary">изменить</button>
				  </div>

				   
		     </div>


		     <div class="col-md-6">
		     		 

		     		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						    	<th>id</th>
						       <th>фамилия</th>
			     				<th>имя</th>
			     				<th>отчество</th>
			     				<th>логин</th>
			     				<th> удалить </th>
						    </tr>
						  </thead>
						  <tbody>
						     <tr v-for=" items in usersList" @dblclick="edite(items.id)">
						     	<td>{{items.id}}</td>
			     				<td>{{items.famaly}}
									 
			     				</td>
			     				<td>{{items.name}}</td>
			     				<td>{{items.sername}}</td>
			     				<td>{{items.login}}</td>
			     				<td> <button class="form-control btn btn-primary">удалить</button> </td>
		     					 
		     				</tr>
						  </tbody>
						</table>


		     </div>

		    

		      
	</div>
    
    


</div>


<script>
    
	var app = new Vue({

		el:'#app',
		data:{
			 usersList:[],
			 userAdd:[],
			 userEdit:[],
			 userDel:[],
			 addBtnShow:true,
			 editeBtnShow:false,

			 userName:null,
			 userFamaly:null,
			 userSername:null,
			 userLogin:null



		},
		methods:{
				edite(id){
						alert(id)
				 	},

				 add(){
					
					this.userEdit.push({'name':this.userName,
										'famaly':this.userFamaly,
										'sername':this.userSername,
										'login':this.userLogin})	 
					console.log(this.userEdit)
					  axios.post('/admin/category/add',this.userEdit)
			      .then(response => ( response.data)).catch(function(error){console.log(error)});
				},

				delete(){

				},

				showEdit(){

				},
				showEdit(){

				},


			},


		mounted(){
 
			      axios.post('/admin/category/GetCategory')
			      .then(response => (this.usersList = response.data)).catch(function(error){console.log(error)});
		},



			 
	});
     
</script>