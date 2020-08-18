<div id="app"   >

		<div class="col-md-12  d-flex flex-wrap"> 
		 	 <div class="col-md-5" >  
			 		  
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th>id</th>
						      <th> title </th>
						        <th>видимость</th>
						      <th></th>
						       
						       
						    
						      
						       
						    </tr>
						  </thead>
						  <tbody>
						  	<!-- class="table-warning" -->
						    <tr v-for="items,index in category "  >
						      <td @click='getEdit(items.id,index)' > {{items.id}}  </td>
						      <td>{{items.title}} </td>
						     
					  		 
					  		
						  		

						  	<td >
									{{published(items.hidden)}}
									
								<div v-if="show" class="custom-control custom-switch">
								  <input type="checkbox" class="custom-control-input" id="customSwitch1">
								  <label class="custom-control-label" for="customSwitch1">показать</label>
								</div>

								 
						  	</td>	
						  	<td><button class="btn btn-primary" @click="delet(items.id,index)" >delete</button></td>
						    </tr>
						    
						     
						  </tbody>
						</table>
				</div>

				<div class="col-md-7"> 
			 		 
 					 <div class="card">

						  <div class="card-body ">
						     	<div class="mb-3"><input class="form-control"  type="text" v-model="title" placeholder="title" ></div>

								<div class="mb-3"><input class="form-control"  type="text" v-model="title_en"  placeholder="title_en" ></div>
 
					     		<div class="mb-3" > <textarea class="form-control"  placeholder="keyword" v-model="keyword"  cols="30" rows="10"></textarea></div>

					     		<div class="mb-3" > <textarea class="form-control" placeholder="description" v-model="description" cols="30" rows="10"></textarea></div>

						  		<button class="btn btn-primary" @click="add"> save </button>

						  </div>
					</div>
				</div>


		 </div>
	</div>
	
<script>

	 
	 var app = new Vue({

		el:'#app',
		data:{
			 
			id:null, 
			title:null,
			title_en:null,
			description:null,
			keyword:null,
			category:[],
			show:false,
			public:null

		},
		methods:{
				edite(id){
						alert(id)
				 	},

				 add(){
						
				 		let req = {'title':this.title,
									'title_en':this.title_en,
									'keyword':this.keyword,
									'description':this.description,
									'hidden':0

									};
					 
					 
						  axios.post('/admin/category/add',req).then(response=>(
						  		// this.id = response.data.id
								this.category.push({'id':response.data.id,	
													'title':this.title,
													'title_en':this.title_en,
													'keyword':this.keyword,
													'description':this.description,
													'hidden':'0'

														})

						  	));
 
 
				},

				delet(id,index){

					 this.category.splice(index)
					 axios.post('/admin/category/delete',{'id':id})
			      		.then(response => (response.data)).catch(function(error){console.log(error)});
				},

				getEdit(id,index){
						let cat =  this.category[index];
						// console.log(cat.title); 
						this.title = cat.title
						this.title_en = cat.title_en
						this.keyword = cat.keyword
						this.description = cat.description

						 axios.post('/admin/category/edite',{
						 		'id':id,
						 		'title':this.title,
								'title_en':this.title_en,
								'keyword':this.keyword,
								'description':this.description
						 })
				      .then(response => (this.category = response.data)).catch(function(error){console.log(error)});
						 
				},

				published(hidden){
					if(hidden == 0){
						return   "скрыта"
					}else{
						return  "показана"
					}
				}					
				 


			},




			mounted(){
	 		
				      axios.post('/admin/category/GetCategory')
				      .then(response => (this.category = response.data)).catch(function(error){console.log(error)});
			},
	});

</script>
  
	