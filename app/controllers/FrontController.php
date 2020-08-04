<?
namespace controllers;
use components\Article;
use components\Category;

use libs\View;
/**
 * 
 */
class FrontController  
{
	public $view;

	public $article;
	public $category;

	function __construct()
	{
		 $this->view = View::getInstance();
		 $this->article = new Article;
		 $this->category = new Category;
	}

	public function template($page,$data)
	{
		 $category = new category;
		 
		$this->view->ViewData = $data;
		$this->view->category = $category;	 
		$this->view->views =  $this->view->render('public/pages/'.$page);
		$this->view->load('public/index');

	}
}