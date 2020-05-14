<?
namespace libs;
use \PDO;


/**
 * 
 */
class Database 
{
	private $dbh;
	 protected static  $instanse;
 
	 protected function __clone(){}
	  

	 protected function __wakeup(){}
	 

	
public static function getInstance()
		    {
		        if (!isset(self::$instanse)) {
		        	
		        	 $class = __class__;
		        	self::$instanse = new $class;
		        }
		        return self::$instanse;
		    }



	// function __construct()
	// {
	// 	try {
 //   		 $this->dbh = new PDO('mysql:host=db;dbname=myDb;charset=utf8', 'user', 'test');
	// 	} catch (PDOException $e) {
	// 	    die('Подключение не удалось: ' . $e->getMessage());
	// 	}
	// }

    private function __construct()
		{
			$configDB = include_once  'config/configDB.php';

			 $dsn = 'mysql:dbname='.$configDB['dbName'].';host='.$configDB['host'];

			 try {
			 	$this->dbh = new PDO($dsn,$configDB['dbUser'],$configDB['password']);
			 } catch (Exception $e) {
			 	echo 'Подключение не удалось: ' . $e->getMessage();
			 }
			
		}

 

	 

	 
 
}