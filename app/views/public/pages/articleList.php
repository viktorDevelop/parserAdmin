<?//print_r($ViewData);?>

<?foreach($ViewData as $items):?>
	<div> <a href="/article/<?=$items['title_en'];?>"> <?=$items['title'];?> </a> </div>
<?endforeach?>