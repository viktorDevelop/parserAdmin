<?
namespace controllers\admin;
use \controllers\admin\AdminController;
 
class CategoryController  extends AdminController
{
	
	 
	public function actionIndex()
	{	
		 
		 // $this->checkAuth();
		$this->template('category');
	}


	public function getCategory()
	{
		 	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			  exit();
			 }

			$request = file_get_contents('php://input');
			$res = json_decode($request,TRUE); 
			 
	}
  
  	public function actionAdd()
  	{	
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		  exit();
		 }

		$request = file_get_contents('php://input');
		$res = json_decode($request,TRUE); 
			 
  		$this->category->title = "test";
		$this->category->title_en = "test";
		$this->category->keyword = "test";
		$this->category->description = "test";
		$this->category->hidden = '1';
		echo $this->category->add(); 
  	}

  	public function actionEdite()
  	{
  		$this->category->id = '5';
  		$this->category->title = "fdsf";
		$this->category->title_en = "tsadest";
		$this->category->keyword = "sdfdsf";
		$this->category->description = "sfdsa";
		$this->category->hidden = '0';
		echo $this->category->edite();  
  	}
	 
	public function actionDelete()
	{
		$this->category->delet($id);  
	}

}


 

