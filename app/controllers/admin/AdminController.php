<?
namespace controllers\admin;
use controllers\FrontController;
use components\Auth;
use components\User;
 
class AdminController extends FrontController
{
	
	  
	 

	public function actionIndex()
	{

		
		 // $this->checkAuth();
		 $this->template('indexView');
		 
	}

	public function actionAuthForm($value='')
	{
		// $this->template('authForm'); 
		$this->view->load('admin/authForm');
	}

	public function actionAuth()
	{
		
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			  exit();
			 }

			$request = file_get_contents('php://input');
			$res = json_decode($request,TRUE); 
			 

		    $user = new User;
		    $userAuth = $user->getUserAuth($res['login'],md5($res['password']));
		    // var_dump($userAuth);
			if (!empty($userAuth)) {
			
			 $this->auth->autorize($userAuth['login']);
			 echo json_encode(['auth'=>'true']);

				}
			 
		  
		 
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
 