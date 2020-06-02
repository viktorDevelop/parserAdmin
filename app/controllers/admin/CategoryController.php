<?
namespace controllers\admin;
use controllers\FrontController;
/**
 * 
 */
class CategoryController extends FrontController
{
	
	
	public function actionIndex($value='')
	 {
	 	 // var_dump($value['alias']);
		 
		$this->view->setTmp('admin') ;
		$this->view->content = $this->view->loadViewsPage('category-form');
		$this->view->loadTemplate();
	 }		 
	 
	 

	 
	public function actionAdd()
	{
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			  exit();
			}
		else{

		echo json_encode(['title'=>'titletest']);	 
		}	

	}

	public function actionEdite()
	{
		 
	}

	public function actionDelete()
	{
		 
	}


}