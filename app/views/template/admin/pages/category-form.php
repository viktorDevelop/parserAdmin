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
			 		 
 					<form-category v-on:add="addToTable"></form-category>
				</div>


		 </div>
	</div>
	
<script>

	Vue.component("form-category",{

		data:function(){
			return {
				title:null,
				title_en:null,
				keyword:null,
				description:null

			}
		},

		methods:{
			add:function(){
				 this.$emit('addToTable',{"title":this.title,'title_en':this.title_en})
			}
		},

		template:`<div class="card">

						  <div class="card-body ">
						     	<div class="mb-3"><input class="form-control"  type="text" v-model="title" placeholder="title" ></div>

								<div class="mb-3"><input class="form-control"  type="text" v-model="title_en"  placeholder="title_en" ></div>
 
					     		<div class="mb-3" > <textarea class="form-control"  placeholder="keyword"  cols="30" rows="10"></textarea></div>

					     		<div class="mb-3" > <textarea class="form-control" placeholder="description" cols="30" rows="10"></textarea></div>

						  		<button class="btn btn-primary" @click="add"> add </button>

						  </div>
					</div>`

	});

	var app = new Vue({

		el:"#app",

		data:function(){
			return{


			}
		},

		computed:{

		},

		methods:{
			addToTable(obj){
				console.log(obj)
			} 
		},

		mounted(){

		}
	});

</script>
  
	