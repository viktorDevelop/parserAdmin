var app = new Vue({


		el:'#app',
		data:{

			 
			 newCat:false,
			title:null,
			text:null,
			 title_en:null,
			 keyword:null,
			 description:null,
			category:null
		},

		mounted(){
 
			      axios.post('/admin/category/GetCategory')
			      .then(response => (this.category = response.data)).catch(function(error){console.log(error)});
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
				 if(this.title != null && this.title_en != null){
				 		var obj = {'id':'',"title":this.title,'title_en':this.title_en,'keyword':this.keyword,'description':this.description}
				 		console.log(obj)
				 	this.category.push(obj)
				 	// $http.post('/category/add',{"title":this.title,'text':this.text})
				 	
					this.title = null
					this.title_en = null
					this.keyword = null
					this.description = null



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

