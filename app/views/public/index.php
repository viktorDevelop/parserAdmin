<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$metaData['title']?></title>


</head>
<body>

	<?//print_r($arResult);?>

		<ul>
			<?foreach($category->getMenu() as $items):?>
				<li><a href="/category/<?=$items['title_en'];?>"> <?=$items['title']?></a></li>
			<?endforeach?>
		</ul>
	 
	 <?=$views;?>
</body>
</html>