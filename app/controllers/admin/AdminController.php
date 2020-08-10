<?
namespace controllers\admin;
use controllers\FrontController;

 
class AdminController extends FrontController
{
	
	 
	
	public function actionIndex()
	{
		  
		  $this->template('category');

	}

	public function actionAuth()
	{
		 
	}

	public function template($page,$data = [])
	{
		  
		$this->view->viewPage =  $this->view->render('admin/pages/'.$page);
		$this->view->load('admin/index');

	}


		 
}
 