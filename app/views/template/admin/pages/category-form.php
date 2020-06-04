<div id="app" class="container  " >

		<div class="col-md-12  d-flex flex-wrap"> 
		 	
		<div class="col-md-4"> 
	 		 <div class="card">

				  <div class="card-body">
				     	<div class="mb-3"><input type="text" v-model = "title" placeholder="title" ></div>
				     	<div class="mb-3" > <textarea v-model="text" cols="30" rows="10"></textarea></div>

				  		<button class="btn btn-primary" @click="add">save</button>

				  </div>
				</div>

				 
		</div>


		 		<div class="col-md-4"  v-for="  (items,index) in category">  
			 		 <div class="card">
						  <!-- <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap"> -->
						  <div class="card-body">
						    <h4 class="card-title" > {{items.title}} id {{items.id}} <!-- {{title}}  --></h4>
						    <p class="card-text">
						      {{items.text}}

						      {{index}}
						    </p>
						  		 
						  		<button class="btn btn-primary" @click="edite(items.id,index)" >edite</button>
						  		<button class="btn btn-primary" @click="deleteCategory(index)">delete</button>
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

			axios
			      .post('/admin/category/GetCategory')
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

