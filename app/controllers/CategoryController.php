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
		 
		$this->view->content = $this->view->loadViewsPage('index');
		$this->view->loadTemplate('blog');
	}


	//http://site.ru/category/php 
	public function actionArticleList($title = "")
	{
		 
	}
		//http://site.ru/article/php-article
	public function actionArticleDetail($title = "")
	{
		 
	}

	public function actionAdd()
	{
		 
	}

	public function actionEdite()
	{
		 
	}

	public function actionDelete()
	{
		 
	}


}