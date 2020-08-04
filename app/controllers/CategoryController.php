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

		// var_dump($article->getList('css'));
	 
		$this->template('articleList',$article->getList());
	}


	//http://site.ru/category/php 
	public function actionPages($title_en = "")
	{
		 $article = new article();
		$this->template('articleList',$article->getList($title_en));
  
	}
		

	public function actionAdd()
	{
		 
	}

	public function actionEdite()
	{
		 
	}

	public function delete()
	{
		 
	}


	private function template($page,$data)
	{
		 $category = new category;
		 
		$this->view->ViewData = $data;
		$this->view->category = $category;	 
		$this->view->views =  $this->view->render('public/pages/'.$page);
		$this->view->load('public/index');

	}


}


 
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


	public function getList($title_en = '')
	{
		if (empty($title_en)) {

			$this->db->query("SELECT * FROM articles  ORDER BY id DESC LIMIT 10");
		 	$this->db->exec();
		 	return $this->db->fetchAll();
		}else{

		}
		 $this->db->query("  SELECT * FROM articles WHERE articles.id IN(SELECT id_art FROM `cat_bind_article` WHERE id_cat IN( SELECT category.id FROM category WHERE category.title_en = :title_en)) ");
		 $this->db->bindValStr(':title_en',$title_en);
		 $this->db->exec();
		return    $this->db->fetchAll();
	}

	public function getArticleDetail($title_en = '')
	{
		 $this->db->query("SELECT * FROM articles WHERE title_en = :title_en");
		 $this->db->exec();
		 return $this->db->fetchAll()[0];
	}
 

}


class Category 
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

	public function getMenu($value='')
	{
		 $this->db->query('SELECT * FROM category');
		 $this->db->exec();
		 return $this->db->fetchAll();
	}



}


