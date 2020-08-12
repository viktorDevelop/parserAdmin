<?
namespace controllers\admin;
use \controllers\admin\AdminController;
 
class ArticleController  extends AdminController
{
	
			 
	

	public function actionIndex()
	{	
		 
		$this->template('article');
	}
  
  	public function actionAdd()
  	{
  		$this->article->title = "phpp-testss";
			 
		$this->article->title_en = "test";
		$this->article->keyword = "test";
		$this->article->content = "";
		$this->article->description = "test";
		$this->article->hidden = '1';


			echo $this->article->add();  
  	}

  	public function actionEdite()
  	{
  		$this->article->title = "phpp-testss";
			 
		$this->article->title_en = "test";
		$this->article->keyword = "test";
		$this->article->content = "";
		$this->article->description = "test";
		$this->article->hidden = '1';


			echo $this->article->edite();   
  	}
	 
	public function actionDelete()
	{
		$this->category->delet($id);  	 
	}

}


 

