<div id="app"   >

		<div class="col-md-12  d-flex flex-wrap"> 
		 	
		


		 		<div class="col-md-4" >  
			 		  
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th>id</th>
						      <th> title </th>
						      <th></th>
						      <th></th>
						      
						       
						    </tr>
						  </thead>
						  <tbody>
						  	<!-- class="table-warning" -->
						    <tr>
						      <td> </td>
						      <td></td>
						      <td><button class="btn btn-primary" >edite</button></td>
					  		 
					  		<td><button class="btn btn-primary" >delete</button></td>
						  		

						  		
						    </tr>
						    <tr><td><button class="btn btn-primary" > save </button></td></tr>
						     
						  </tbody>
						</table>
				</div>

				<div class="col-md-8"> 
			 		 
 					 <div class="card">

						  <div class="card-body ">
						     	<div class="mb-3"><input class="form-control"  type="text" v-model="title" placeholder="title" ></div>

								<div class="mb-3"><input class="form-control"  type="text" v-model="title_en"  placeholder="title_en" ></div>
 
					     		<div class="mb-3" > <textarea class="form-control"  placeholder="keyword"  cols="30" rows="10"></textarea></div>

					     		<div class="mb-3" > <textarea class="form-control" placeholder="description" cols="30" rows="10"></textarea></div>

						  		<button class="btn btn-primary" @click="add"> add </button>

						  </div>
					</div>
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
					
					// var catEdit	 = _.find(this.category,{'id':id})
					this.userEdit.push({'name':this.userName,
										'famaly':this.userFamaly,
										'sername':this.userSername,
										'login':this.userLogin})
					this.usersList.push({'name':this.userName,
										'famaly':this.userFamaly,
										'sername':this.userSername,
										'login':this.userLogin})	 
					console.log(this.userEdit)
					  axios.post('/admin/category/add',this.userEdit)
			      .then(response => ( response.data)).catch(function(error){console.log(error)});
				},

				delet(id){
					 axios.post('/admin/category/delete',{'id':id})
			      		.then(response => (response.data)).catch(function(error){console.log(error)});
				},

				showEdit(){

				},
				 


			},


		mounted(){
 
			      axios.post('/admin/category/GetCategory')
			      .then(response => (this.usersList = response.data)).catch(function(error){console.log(error)});
		},

</script>
  
	