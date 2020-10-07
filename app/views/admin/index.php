<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>

	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

	
</head>
<body>
		 <header>
	 	 <div class="container d-flex ">
	 	 	<div class="col-md-12">
	 	 		 
	 	 			 <nav class="navbar navbar-expand-lg navbar-light bg-light">
						  <a class="navbar-brand" href="/">Navbar</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto">
								 <li class="nav-item" >
							      	<a  class="nav-link" href="/admin/category/"> категории  </a>
							      </li>

							      <li class="nav-item" >
							      	<a  class="nav-link" href="/admin/article/"> статьи  </a>
							      </li>

							      <li class="nav-item" >
							      	<a  class="nav-link" href="/admin/article/"> настройки сайта  </a>
							      </li>

							      <li class="nav-item" >
							      	<a  class="nav-link" href="/admin/article/">    выход   </a>
							      </li>
							   					    
							</ul>
						    <form class="form-inline my-2 my-lg-0">
						      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
						      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						    </form>
						  </div>
						</nav>
	 	 		 
	 	 	</div>
	 	 </div>
	 </header>

	 <div class="container d-flex">
	 		<div class="col-md-12">
	 			
				<?=$viewPage?>

	 		</div>

	 </div>

</body>
</html>