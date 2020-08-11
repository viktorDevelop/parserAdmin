<?
namespace controllers\admin;
use \controllers\admin\AdminController;
 
class CategoryController  extends AdminController
{
	
			 
	

	public function actionIndex()
	{	
		 
		 $this->checkAuth();
		 print_r($_SESSION);
		// echo $this->auth->user();
		$this->template('category');
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


 

