<?
namespace controllers;
use controllers\FrontController;
/**
 * 
 */
class CategoryController extends FrontController
{
	
			 
	//http://site.ru/    

	public function actionIndex()
	{
		 
		$this->view->setTmp('blog'); 
		$this->view->content = $this->view->loadViewsPage("index");
		$this->view->loadTemplate();
	}


	//http://site.ru/category/php 
	public function actionArticleList($title = "")
	{	

	}
		//http://site.ru/article/php-article
	public function actionArticleDetail($title = "")
	{
		 
	}

	 
	 


}