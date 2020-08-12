<?
namespace components;
 use components\Model;
class Article  extends Model
{
	 
 	public static $table = "articles";
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
		 $this->db->bindValStr(':title_en',$title_en);
		 $this->db->exec();
		 return $this->db->fetchAll()[0];
	}
 	

 	public function getMetaData($title_en = '')
	{
		$this->db->query('SELECT title,title_en,keyword,description FROM articles WHERE title_en = :title_en');
		$this->db->bindValStr(':title_en',$title_en);
		$this->db->exec();
		return $this->db->fetchAll()[0]; 
	}


	public function add()
	{
		   
		 $res =  $this->insert();
		if ($res > 0 ) {
			return "success";
		}
		else{
			return "error";
		}
	}


	public function edite($value='')
	{

		return   $this->update();
	}

	public function delet($id)
	{
		 $this->delete($id);
	}

}
