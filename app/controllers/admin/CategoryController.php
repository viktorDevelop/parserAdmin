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


	public function actionGetCategory()
	{
		 	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			  exit();
			 }

			// $request = file_get_contents('php://input');
			// $res = json_decode($request,TRUE); 
			 $res =  $this->category->get();
			 echo json_encode($res);
			 // print_r($res);
			 
	}
  
  	public function actionAdd()
  	{	
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		  header('location:/admin/');
		 }

		$request = file_get_contents('php://input');
		$res = json_decode($request,TRUE); 
		 
  		$this->category->title = $res['title'];
		$this->category->title_en = $res['title_en'];
		$this->category->keyword = $res['keyword'];
		$this->category->description = $res['description'];
		$this->category->hidden = $res['hidden'];
		$arr['id'] =  $this->category->add();
		 echo json_encode($arr);

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
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		  exit();
		 }
		$request = file_get_contents('php://input');
		$res = json_decode($request,TRUE); 
		 
		$this->category->delet($res['id']);  
	}

}

 

