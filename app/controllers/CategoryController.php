<?
namespace controllers;
use libs\View;
use libs\Database;

/**
 * 
 */
class CategoryController 
{
	
			 
	//http://site.ru/    

	public function actionIndex()
	{
		 $view = View::getInstance();
		 $data = Database::getInstance();

		 $data->query("SELECT * FROM category");
		  $data->exec();
		  $categoryData = $data->fetchAll();
		   
		  $data->query("SELECT * FROM articles ORDER BY id DESC LIMIT 10");
		  $data->exec();
		  $listArticles = $data->fetchAll();
		  

		  
		 $view->categoryData = $categoryData;
		 $view->listArticles = $listArticles;
		 $view->load('template/blog');
	}


	//http://site.ru/category/php 
	public function actionArticleList($title)
	{
		  $view = View::getInstance();
		 $data = Database::getInstance();

		  $data->query("SELECT * FROM category");
		  $data->exec();
		  $categoryData = $data->fetchAll();



		 $data->query("SELECT * FROM articles WHERE articles.id IN (SELECT cat_bind_article.id_art FROM cat_bind_article WHERE cat_bind_article.id_cat = (SELECT category.id  FROM `category` WHERE category.title_en = :title_en)) ");
		 $data->bindValStr(":title_en",$title);
		  $data->exec();
		  $listArticles = $data->fetchAll();

		  var_dump($listArticles);
		   
		   
		  
		 $view->categoryData = $categoryData;
		 $view->listArticles = $listArticles;
		 $view->load('template/blog');


	}
		//http://site.ru/article/php-article
	public function actionArticleDetail($title = "")
	{
		 
	}

	public function add()
	{
		 
	}

	public function edite()
	{
		 
	}

	public function delete()
	{
		 
	}


}