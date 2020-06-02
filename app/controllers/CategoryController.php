<?
namespace controllers;

use libs\View;
use libs\Database;


use controllers\FrontController;

class CategoryController extends FrontController
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
		  
		 
		  
		  $meta =  $this->getMetaTags('php',$categoryData);
		 $view->title =  $meta['title'];
		 $view->keywords =  $meta['keyword'];
		 $view->description =  $meta['description'];
		  
		 $view->categoryData = $categoryData;
		 $view->listArticles = $listArticles;
		 
		 $this->view->setTmp('blog'); 
		$this->view->content = $this->view->loadViewsPage("index");
		$this->view->loadTemplate();

	}


	//http://site.ru/category/php 

	public function actionArticleList($title)
	{
		  $view = View::getInstance();
		 $data = Database::getInstance();

		  $data->query("SELECT * FROM category");
		  $data->exec();
		  $categoryData = $data->fetchAll();



		 $data->query("SELECT * FROM articles WHERE articles.id IN (SELECT cat_bind_article.id_art FROM cat_bind_article WHERE cat_bind_article.id_cat = (SELECT category.id  FROM `category` WHERE category.title_en = :title_en))  AND articles.hidden != 0");
		 $data->bindValStr(":title_en",$title);
		  $data->exec();
		  $listArticles = $data->fetchAll();

		  // var_dump($listArticles);

		    $meta =  $this->getMetaTags($title,$categoryData);
		 $view->title =  $meta['title'];
		 $view->keywords =  $meta['keyword'];
		 $view->description =  $meta['description'];
		   
		   
		  
		 $view->categoryData = $categoryData;
		 $view->listArticles = $listArticles;
		 
		 $this->view->setTmp('blog'); 
		$this->view->content = $this->view->loadViewsPage("index");
		$this->view->loadTemplate();


	
		//http://site.ru/article/php-article
	public function actionArticleDetail($title)
	{
		$view = View::getInstance();
		$data = Database::getInstance();

		$data->query("SELECT * FROM category");
		$data->exec();
		$categoryData = $data->fetchAll();



		$data->query("SELECT * FROM articles WHERE title_en = :title_en AND hidden !=0");
		$data->bindValStr(":title_en",$title);
		$data->exec();
		$detailArticle = $data->fetchAll();

		$meta =  $this->getMetaTags('php-article1',$detailArticle);
		    
		 $view->title =  $meta['title'];
		 $view->keywords =  $meta['keyword'];
		 $view->description =  $meta['description'];

		  // var_dump($listArticles);
		   
		   
		  
		 $view->categoryData = $categoryData;
		 $view->detailArticle = $detailArticle;
		 $view->viewsPages = $view->render("template/pages/detailArticle");
		 $view->load('template/blog');
	}

	 
	 

	private function getMetaTags($title,$data = [])
	{
		if (!empty($title) && !empty($data)) {
			

			 foreach ($data as $key => $value) {
			 	 
			 	// var_dump($value['title_en']);
			 	 if ($title == $value['title_en']) {

			 	  	  $res =  $value;
			 	  	 break;

			 	 }
			 }

			 return $res;
		}
	}

	private  function template($TEMPLATE_NAME, $VIEW_NAME)
	{
		  $view = View::getInstance();
		 $data = Database::getInstance();


	}


}