<?
namespace libs; 
// defined('_access') or exit;

class View {

	 protected $data = [];

	  protected static  $instanse;

	 

	 protected function __clone(){}
	  

	 protected function __wakeup(){}

	 private function __construct(){}

	  


   public static function getInstance()
		    {
		        if (!isset(self::$instanse)) {
		        	
		        	$class = __class__;
		        	self::$instanse = new $class;
		        }
		        return self::$instanse;
		    }

	 public function __set($k,$v)
	 {
	 	 $this->data[$k]=$v;
	 }

	 public function render($template)
	 {
	 	 foreach ($this->data as $key => $value) {
	 	 	 
	 	 	 $$key = $value;
	 	 }

	 	 ob_start();

	 	 include $_SERVER['DOCUMENT_ROOT']."/views/".$template.'.php';
	 	 $content = ob_get_contents();

	 		ob_end_clean();

	 		return $content;
	 }

	 public function load($template)
	 {
	 	 echo $this->render($template);
	 }
}