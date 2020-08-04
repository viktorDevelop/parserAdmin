<?
namespace components;
use libs\Database;
class Category 
{
	
	public $title;
	public $keyword;
	public $description;
	 
	public $hidden;

	private $db;

	function __construct()
	{
		 $this->db = Database::getInstance();
	}

	public function getMenu($value='')
	{
		 $this->db->query('SELECT title,title_en FROM category');
		 $this->db->exec();
		 return $this->db->fetchAll();
	}

	public function getMetaData($title_en = '')
	{
		$this->db->query('SELECT title,title_en,keyword,description FROM category WHERE title_en = :title_en');
		$this->db->bindValStr(':title_en',$title_en);
		$this->db->exec();
		return $this->db->fetchAll()[0]; 
	}



}
