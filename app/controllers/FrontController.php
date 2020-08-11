<?
namespace controllers;
use components\Article;
use components\Category;
use components\Auth;

use libs\View;
/**
 * 
 */
class FrontController  
{
	public  $view;

	public $article;
	public $category;
	public $route;
	 public $auth;
	 
	function __construct($route)
	{
		 $this->route = $route;
		 $this->auth = new Auth; 
		 $this->view = View::getInstance();
		 $this->article = new Article;
		 $this->category = new Category;
	}

	public function template($page,$data)
	{
		 

		$this->view->ViewData = $data;
		$this->view->category = $this->category;	 
		$this->view->views =  $this->view->render('public/pages/'.$page);
		$this->view->load('public/index');

	}
}