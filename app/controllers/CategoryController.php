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
		 
		
	}


	//http://site.ru/category/php 
	public function actionArticleList($title = "")
	{
		 
	}
		//http://site.ru/article/php-article
	public function actionArticleDetail($title = "")
	{
		 
	}

	public function actionAddView($value='')
	{
		 $this->view->content = $this->view->loadViewsPage('index');
		$this->view->loadTemplate('blog');
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