<?
namespace components;
use libs\Database;
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
