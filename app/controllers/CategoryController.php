<?
namespace controllers;
use controllers\FrontController;
 
class CategoryController extends FrontController
{
	
			 
	//http://site.ru/    

	public function actionIndex()
	{
		 $this->view->metaData = $this->category->getMetaData($title_en);
	 	$this->view->title =  'главная';
		$this->template('articleList',$this->article->getList());
	}


	//http://site.ru/category/php 
	public function actionPages($title_en = "")
	{ 
  
		$this->view->metaData = $this->category->getMetaData($title_en);
		$this->template('articleList',$this->article->getList($title_en));
  
	}
		

	public function actionAdd()
	{
		 
	}

	public function actionEdite()
	{
		 
	}

	public function delete()
	{
		 
	}


	 


}


 

 