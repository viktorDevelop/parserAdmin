<?
namespace controllers;
use controllers\FrontController;
use libs\Database;
class CategoryController extends FrontController
{
	
			 
	//http://site.ru/    

	public function actionIndex()
	{
		 
		$article = new article();
		var_dump($article->getList());
		$this->template('articleList',[]);
	}


	//http://site.ru/category/php 
	public function actionArticleList($title = "")
	{
		 
	}
		//http://site.ru/article/php-article
	public function actionArticleDetail($title = "")
	{
		 
	}

	public function actionAdd()
	{
		 
	}

	public function edite()
	{
		 
	}

	public function delete()
	{
		 
	}


	private function template($page,$data)
	{
		// $this->section = new category('menu',['TYPE'=> "TOP",'TEMPLATE'=>'PUBLIC']);
		 
		 // $this->view->pageData = $data;
		 // $this->view->components = $this->components('menu','top');
		$this->view->views =  $this->view->render('public/pages/'.$page);
		$this->view->load('public/index');

	}


}


/**
 * 
 */
class Article 
{
	public $title;
	public $keyword;
	public $description;
	public $full_text;
	public $preview_text;
	public $hidden;

	private $db;

	function __construct()
	{
		 $this->db = Database::getInstance();
	}


	public function getList()
	{
		 $this->db->query('SELECT * FROM article ORDER BY id DESC limit 10 ');
		 $this->db->exec();
		 return $this->db->FetchAll();
	}

	public function getDetail($value='')
	{
		 
	}


}


