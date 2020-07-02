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
			$this->db->query("SELECT * FROM users");
			$this->db->exec();
			$res = $this->db->fetchAll();
			echo json_encode($res);	 
		}	 
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