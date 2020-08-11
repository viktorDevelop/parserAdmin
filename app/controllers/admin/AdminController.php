<?
namespace controllers\admin;
use controllers\FrontController;
use components\Auth;
 
class AdminController extends FrontController
{
	
	  
	 

	public function actionIndex()
	{

		
		 $this->checkAuth();
		 
	}

	public function actionAuth()
	{
		$this->template('authForm'); 
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			  exit();
			}
		$request = file_get_contents('php://input');
		$res = json_decode($request,TRUE); 
		print_r($res);


		 
	}

	public function template($page,$data = [])
	{
		  
		$this->view->viewPage =  $this->view->render('admin/pages/'.$page);
		$this->view->load('admin/index');

	}

	public function checkAuth()
	{
		 if ($this->auth->user() !==null) {
	 		 $this->auth->autorize($this->auth->user());

	 	}

	 	if (!$this->auth->autorized() && $this->route['action']!=='auth') {
		 	 
		 	header("location:/admin/");
		 	exit;
		 }
	}

	public function actionExit($value='')
	{
	 	$this->auth->unAutorized();
	}

	   

		 
}
 