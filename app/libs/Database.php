<?
namespace libs;
use PDO;


/**
 * 
 */
class Database 
{
	private $dbh;
	private $statemate;

	private $data;

	private $params;

	private $select;
	private $orderBy;
	private $from;
	private $where;

	function __construct()
	{
		try {
   		 $this->dbh = new PDO('mysql:host=db;dbname=myDb;charset=utf8', 'user', 'test');
		} catch (PDOException $e) {
		    die('Подключение не удалось: ' . $e->getMessage());
		}
	}


	public function __set($k,$v)
	{
		$this->data[$k] = $v; 
	}

	 

	 

	public function select($titles = [])
	{
		if (empty($titles)) {
			 $this->select = 'SELECT *';
			 return $this;

		}else{
			$str =  implode(',', $titles);
			 $this->select = 'SELECT '.$str;
			 return $this;
		}
		
	}

	public function from($table)
	{
		 
			
		$this->from =  $this->select.' FROM '.$table;

		$this->statemate = $this->dbh->prepare($this->from);
		return $this;
		 
	}

	public function execute()
	{
		 $this->statemate->execute(); 
		 return $this;
	}

	public function fetchAll($value='')
	{
		return $this->statemate->fetchAll(); 
	}

	public function orderBy($titles, $direction)
	{
		if (!empty($this->params)) {

			 $this->orderBy =  $this->from. " ORDER BY $titles ".$direction;
			$this->statemate = $this->dbh->prepare($this->orderBy);
			return $this;
			 
		}
		else{

			 $this->orderBy =  " ORDER BY $titles ".$direction;
		}
		
	}

	public function where($params = [],$TYPE)
	{
		$this->params = $params;
		echo $this->orderBy.'<br>';
		echo $this->where = $this->from." WHERE id = :id ".$this->orderBy;
		$this->statemate = $this->dbh->prepare($this->where);
		$this->statemate->bindValue(":id",'2',\PDO::PARAM_INT);
		return $this; 
	}






	public function insert($value='')
	{
		 
	}

	public function update($value='')
	{
		 
	}

	public function delete($value='')
	{
		 
	}
}