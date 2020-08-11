<?
namespace components;
use libs\Database;
class User 
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

	public function getUserAuth($login, $password)
	{
		$this->db->query('SELECT *  FROM users where login = :login and password = :password');
		$this->db->bindValStr(':login',$login);
		$this->db->bindValStr(':password',$password);
		$this->db->exec();
		$res = $this->db->fetchAll();
		 
		if (count($res) > 0 ) {
			 return $res[0];

		} 
	}

	 



}