<?
namespace controllers\admin;
use controllers\FrontController;
/**
 * 
 */
class CategoryController extends FrontController
{
	
			 
	 
	public function actionPageViewAdmin($value='')
	{
		var_dump($value['alias']);
		 
		$this->view->setTmp('admin') ;
		$this->view->content = $this->view->loadViewsPage($value['alias']);
		$this->view->loadTemplate();




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