<?
namespace controllers\admin;
use \controllers\admin\AdminController;
 
class CategoryController  extends AdminController
{
	
	 
	public function actionIndex()
	{	
		 
		 // $this->checkAuth();

	}
  
  	public function actionAdd()
  	{
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


 

