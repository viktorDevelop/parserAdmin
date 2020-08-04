<?
namespace controllers;
use controllers\FrontController;
 
class ArticleController extends FrontController
{
 	//http://site.ru/article/php-article
	public function actionPages($title_en = "")
	{
		 
		 $this->view->metaData = $this->article->getMetaData($title_en);
		$this->template('articleDetail',$this->article->getArticleDetail($title_en));

		 
	}
 }