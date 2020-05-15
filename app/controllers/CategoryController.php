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
		   
		  $data->query("SELECT * FROM article ORDER BY id DESC LIMIT 10");
		  $data->exec();
		  $listArticles = $data->fetchAll();
		  

		  
		 $view->categoryData = $categoryData;
		 $view->listArticles = $listArticles;
		 $view->load('template/blog');
	}


	//http://site.ru/category/php 
	public function actionArticleList($title = "")
	{
		 
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