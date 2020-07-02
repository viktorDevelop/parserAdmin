<?
namespace controllers;
use controllers\FrontController;
/**
*
*/
class PageController extends FrontController
{


//http://site.ru/
public function actionIndex()
{

$this->view->setTmp('blog');
$this->view->content = $this->view->loadViewsPage("index");
$this->view->loadTemplate();
}
//http://site.ru/category/php
public function actionArticleList($title = "")
{
}
//http://site.ru/article/php-article
public function actionArticleDetail($title = "")
{

}
public function templateBlog($alias)
{
$this->view->keywords = "";
$this->view->desctiption = "";
$this->view->menuTop = new Category(["TYPE"=>"MENU","LAYOUT"=>"BLOG","TEMPLATE"=>"TOP"]);
$this->view->leftMenu = new Category("TYPE"=>"RIGHT","LAYOUT"=>"BLOG","TEMPLATE"=>"LEFT");
$this->view->content = $this->view->loadViewsPage($alias['title_en']);
$this->view->setTmp("blog");
$this->view->loadTemplate();
}
public function tempateShop()
{
# 
}


}


 
class ClassName extends AnotherClass
{
	
	function __construct()
	{
		 
	}


	//menuTop
	//select * from category where hidden != 0
}