<?
namespace components;
use libs\Database;
class Component    
{
	 private $data;
	public  $db;

	 public function __set($k,$v)
	 {
	 	 $this->data[$k]=$v;
	 }


	function __construct()
	{
		  $this->db = Database::getInstance(); 
	}

	 public  function insert()
		{
			 

			 $cols = array_keys($this->data);
			 $ins = [];
			$data = [];
			 //var_dump($this->db->data);
			foreach ($cols as $key) {
				 $ins[] = ":".$key;
				 $data[':'. $key] = $this->data[$key];
			}
			 
			 
			 
			  echo	$sql = "INSERT INTO   ".static::$table. "
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 
			 
			 
			 
			 
			// $this->db->query($sql); 
			//   $this->db->execute($data);  
			//   return $this->db->LastInserId();
			 
			  
			 
		}

	public function update($table)
		{
			 $cols = array_keys($this->data);

			 foreach ($cols as $key) {
				  
				 $data[':'.$key] = $this->data[$key];
				$up[] = $key.'=:'.$key;

			 	 
			}
	 		
			  $sql = "UPDATE " .static::getTable(). " SET  ".implode(',', $up). " WHERE id = :id";
			  
			  $this->db->query($sql); 
			  $this->db->execute($data);  
			  return $this->db->LastInserId();
	 		 

		}

	public function delete($id){

			 $sql = "DELETE FROM users WHERE id = :id";
			  $this->db->query($sql); 
			  $this->db->bindValInt(':id',$id);
			 $this->db->exec();  
			 
	}
 
}