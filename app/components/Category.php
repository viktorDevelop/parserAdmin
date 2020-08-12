<?
namespace components;
use components\Model;
 class Category   extends Model
{
	
	 
	public static $table = "category";

	public function getMenu()
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


	 
	public function add($value='')
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
