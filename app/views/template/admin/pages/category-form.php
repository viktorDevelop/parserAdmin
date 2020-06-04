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
						    <tr v-for="  (items,index) in category" >
						      <td>{{items.id}}</td>
						      <td>{{items.title}}</td>
						      <td><button class="btn btn-primary" @click="edite(items.id,index)" >edite</button></td>
					  		 
					  		<td><button class="btn btn-primary" @click="deleteCategory(index)">delete</button></td>
						  		

						  		
						    </tr>
						     
						  </tbody>
						</table>
				</div>

				<div class="col-md-8"> 
			 		 <div class="card">

						  <div class="card-body ">
						     	<div class="mb-3"><input class="form-control"  type="text" v-model = "title" placeholder="title" ></div>

								<div class="mb-3"><input class="form-control"  type="text" v-model = "title_en" placeholder="title_en" ></div>

						     	 
						     	<div class="mb-3" > <textarea class="form-control" v-model="text" cols="30" rows="10"></textarea></div>

					     		<div class="mb-3" > <textarea class="form-control" v-model="keyword" placeholder="keyword"  cols="30" rows="10"></textarea></div>

					     		<div class="mb-3" > <textarea class="form-control" v-model="description" placeholder="description" cols="30" rows="10"></textarea></div>

						  		<button class="btn btn-primary" @click="add">save</button>

						  </div>
					</div>
 
				</div>


		 </div>
	</div>
	
<script>
	
  
	var app = new Vue({


		el:'#app',
		data:{

			 
			title:null,
			text:null,
			 
			category:null
		},

		mounted(){

			 
			// axios.post('/admin/category/GetCategory', {
			// 	    firstName: 'Fred',
			// 	    lastName: 'Flintstone'
			// 	  })
			// 	  .then(function (response) {
			// 	  	this.category = response.data
			// 	    // console.log(response.data);
			// 	  })
			// 	  .catch(function (error) {
			// 	    console.log(error);
			// 	  });

			// 	  console.log(this.category)

			 
			      axios.post('/admin/category/GetCategory')
			      .then(response => (this.category = response.data));
		},


		computed:{
			  
		},

		methods:{


			deleteCategory(index){
				 
				 var idcat = index+1
				 idcat = String(idcat);
				 var cat	 = _.find(this.category,{'id':idcat})

				 // console.log(this.category)
				 
				 this.category.splice(index,1)
				
			},

			add(){
				 if(this.title != null && this.text != null){

				 	this.category.push({'id':'',"title":this.title,'text':this.text})
				 	// $http.post('/category/add',{"title":this.title,'text':this.text})
					this.title = null
					this.text = null


				 }else{
				 	alert('поля должны быть заполнены')
				 }
				
			},

			edite(id,index){


				var catEdit	 = _.find(this.category,{'id':id})

				
				this.title = catEdit.title
				this.text = catEdit.text

				// console.log(catEdit)
				// var objAdd = {'title':this.title,'text':this.text}

				this.category.splice(index,1)


				

			},

			 
		}



		 


	});

	
</script>

