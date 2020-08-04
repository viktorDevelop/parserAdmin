<?
namespace components;
use libs\Database;
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
