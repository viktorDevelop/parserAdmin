<?
namespace controllers\admin;
use controllers\FrontController;
use components\Auth;
 
class AdminController extends FrontController
{
	
	 
	function __construct($route)
	{
		$this->auth = new Auth; 
		$this->checkAutorization();   
	}


	public function actionIndex()
	{
		 
		 
	}

	public function actionAuth()
	{
		$this->template('authForm'); 
	}

	public function template($page,$data = [])
	{
		  
		$this->view->viewPage =  $this->view->render('admin/pages/'.$page);
		$this->view->load('admin/index');

	}

	 protected function headerLocate($value)
	 {
	 	  $url = 'location:'.URL.$value;
	 	header($url);
	 	   
	 }

	 public function checkAutorization()
	 {
	 	if ($this->auth->user() !==null) {
	 		 $this->auth->autorize($this->auth->user());

	 	}

	 	if (!$this->auth->autorized() && $this->route['action']!=='login') {
		 	 
		 	$this->headerLocate('admin/login');
		 	exit;
		 }
	 	 
	 	
	 }

	 public function actionLogin()
	{
		  
		 if (isset($_POST['enter'])) {

			 	$UserModel = $this->classLoad->models('UserModel')->getUserInfo($_POST['login'],md5($_POST['password'])); 

			 	 if (!empty($UserModel)) {
			 	 $user = $UserModel[0];
			 	 	if ($user['role']==='admin') {
			 	 		$hash = md5($user['id'].$user['login'].$user['password'].$this->auth->salt());
			 	 		$this->auth->autorize($hash);
			 	 		 $this->headerLocate('admin');
			 	 		 
			 	 	}
			 	 
				}else{
					$this->view->error = "не верные данные";	
			}
		 }
		
		
		 
		 
		 
 		$this->view->load('admin/signIn');
	}

	public function actionExit()
	{
		 $this->auth->unAutorized();
		$this->headerLocate('admin');
	}

		 
}
 