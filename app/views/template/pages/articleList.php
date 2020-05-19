
 				<?foreach($listArticles as $item):?>

					<div class="col-md-4 ">

					

						<div class="card ">
						  <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
						  <div class="card-body">
						    <h4 class="card-title"> <?=$item['title']?></h4>
						    <p class="card-text">
						      	<?=mb_strimwidth($item['content'], 0, 30," ... ")?>
						    </p>
						    <a href="/article/<?=$item['title_en']?>" class="btn btn-primary"> подробнее </a>
						  </div>
						</div>

					</div>
				<?endforeach?>
	 