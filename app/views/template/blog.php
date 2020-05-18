<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>
	
	<div class="container">
		<div class="col-md-12">
			 
				
				 <nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand" href="#">Navbar</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">

							<?foreach($categoryData as $item):?>
							      <li class="nav-item active">
							        <a class="nav-link" href="/category/<?=$item['title']?>">

							        	<?=$item['title_en']?>  <span class="sr-only">(current)</span></a>
							      </li>

							<?endforeach;?>
					      
					    </ul>
					    <form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					    </form>
					  </div>
					</nav>



 
		</div>
	</div>


	<div class="container   " >

		<div class="col-md-12 d-flex">
			
				<?foreach($listArticles as $item):?>

					<div class="col-md-4 ">

					

						<div class="card">
						  <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
						  <div class="card-body">
						    <h4 class="card-title"> <?=$item['title']?></h4>
						    <p class="card-text">
						      Some quick example text to build on the card title
						      and make up the bulk of the card's content.
						    </p>
						    <a href="#!" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>

					</div>
				<?endforeach?>
		</div>


	</div>
 	




</body>
</html>