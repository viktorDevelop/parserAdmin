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

				<button @click="load"> загрузить </button>
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
			 
			category:[{'id':'1','title':'test','text':'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'},
				{'id':'2','title':'test111','text':'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'},
				{'id':'3','title':'test222','text':'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'}]
		},

		mounted(){
			// axios.post('/admin/category/add', {
			// 	    firstName: 'Fred',
			// 	    lastName: 'Flintstone'
			// 	  })
			// 	  .then(function (response) {
			// 	    console.log(response);
			// 	  })
			// 	  .catch(function (error) {
			// 	    console.log(error);
			// 	  });
		},


		computed:{
			 
		},

		methods:{


			deleteCategory(index){
				 
				 var idcat = index+1
				 idcat = String(idcat);
				 var cat	 = _.find(this.category,{'id':idcat})

				 // console.log(this.category)
				 
				 //this.category.splice(index,1)
				
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

			load(){
				
				axios.post('/admin/category/add', {
				    firstName: 'Fred',
				    lastName: 'Flintstone'
				  })
				  .then(function (response) {
				    console.log(response);
				  })
				  .catch(function (error) {
				    console.log(error);
				  });
			}
		}



		 


	});

	
</script>

