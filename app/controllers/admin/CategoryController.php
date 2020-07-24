<?
namespace controllers\admin;
use controllers\FrontController;
use libs\Database;
/**
 * 
 */
class CategoryController extends FrontController
{
	
	
	public function actionIndex($value='')
	 {
	 	 // var_dump($value['alias']);
		 
		$this->view->setTmp('admin') ;
		$this->view->content = $this->view->loadViewsPage('userList');
		$this->view->loadTemplate();

		// $articleModel = $this->classLoad->models('article');
		// $articleModel->getArticleList(['limit'=>10,'offset'=>'1','ORDER_BY'=>"DESC"]);
		// $articleModel->get_keyword();
		// $articleModel->get_descrip();
		// $articleModel->get_title();
	 }		 
	 
	 
	 public function actionGetCategory()
	 {
	 	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			  exit();
			}
		else{
			$this->getUser();
		}	 
	 }
	 
	public function actionAdd()
	{
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			  exit();
			}
		else{
			
		 	$request = file_get_contents('php://input');
		 	$res = json_decode($request); 
		 	 
		 	echo $res['name'];
		}	

	}

	public function actionEdite()
	{
		 
	}

	public function actionDelete()
	{	
		$user = new UserModel;
		$request = file_get_contents('php://input');
		$res = json_decode($request,TRUE); 

		echo $user->delete($res['id']);
		 print_r($res);
	}

	private function getUser()
	{
			$this->db->query("SELECT * FROM users");
			$this->db->exec();
			$res = $this->db->fetchAll();
			echo json_encode($res);	  
	}

 
}

/**
 * 
 */
class UserModel 
{
	private $data;
	private $db;

	 public function __set($k,$v)
	 {
	 	 $this->data[$k]=$v;
	 }


	function __construct()
	{
		  $this->db = Database::getInstance(); 
	}

	 public  function insert()
		{
			 

			 $cols = array_keys($this->data);
			 $ins = [];
			$data = [];
			 //var_dump($this->db->data);
			foreach ($cols as $key) {
				 $ins[] = ":".$key;
				 $data[':'. $key] = $this->data[$key];
			}
			 
			 
			 
			  echo	$sql = "INSERT INTO  users ". "
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 
			 
			 
			 
			 
			$this->db->query($sql); 
			  $this->db->execute($data);  
			  return $this->db->LastInserId();
			 
			  
			 
		}

	public function update()
		{
			 $cols = array_keys($this->data);

			 foreach ($cols as $key) {
				  
				 $data[':'.$key] = $this->data[$key];
				$up[] = $key.'=:'.$key;

			 	 
			}
	 		
			  $sql = "UPDATE " .static::getTable(). " SET  ".implode(',', $up). " WHERE id = :id";
			  
			  $this->db->query($sql); 
			  $this->db->execute($data);  
			  return $this->db->LastInserId();
	 		 

		}

	public function delete($id){

			 $sql = "DELETE FROM users WHERE id = :id";
			  $this->db->query($sql); 
			  $this->db->bindValInt(':id',$id);
			 $this->db->exec();  
			 
	}
 
}