<?
namespace components;
use libs\Database;
use libs\DBHelper;


class Model    
{
	 private $data;
	protected  $db;

	  


	function __construct()
	{
		  $this->db = Database::getInstance(); 
	}

	public function __set($k,$v)
	 {
	 	 $this->data[$k]=$v;
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
			 
			 
			 
			  	$sql = "INSERT INTO   ". static::$table."
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 
			 
			 
			
			 
			$this->db->query($sql); 
			  $this->db->execute($data);  
			  return $this->db->LastInserId();
			 
			  
			 
		}

	public function update()
		{
			 $cols = array_keys($this->data);

			 foreach ($cols as $key) {
				  
				 $data[':'.$key] = $this->data[$key];
				$up[] = $key.'=:'.$key;

			 	 
			}
	 		
			    $sql = "UPDATE " .static::$table. " SET  ".implode(',', $up). " WHERE id = :id";
			 
			  $this->db->query($sql); 
			  $this->db->execute($data);  
			  return $this->db->LastInserId();
	 		 

		}

	public function delete($id){

			 echo $sql = "DELETE FROM ".static::$table." WHERE id = :id";
			  $this->db->query($sql); 
			  $this->db->bindValInt(':id',$id);
			 $this->db->exec();  
			 
	} 
 
}