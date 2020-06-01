<? 
namespace libs; 
  use Exception; 
class Router
{
	public $routes;
	public $route;	

	public function __construct()
	{
		 $routesPath = 'config/ConfigRoutes.php';
		 $this->routes = include $routesPath;
	}

	private function getUri()
		{
			if (!empty($_SERVER['REQUEST_URI'])) {
				 
				return  trim($_SERVER['REQUEST_URI'],'/');
			}


		}
// сравнение таблицы маршрутов
 	  private function matchRoute()
 	  {

 	  	foreach ($this->routes as $uriPattern => $path)
	 		 {
				 
				 if (preg_match("~$uriPattern~i", $this->getUri(),$matches)) {
				 		
				 	 
				 	 foreach ($matches as $key => $value) {
				 	 	 if (is_string($key)) {
				 	 	 		
				 	 	 		$path[$key] = $value;
				 	 	 }
				 	 }

				 	 if (!isset($path['action'])) {
				 	 	 
				 	 	 $path['action'] = 'index';
				 	 }
				 	 if (!isset($path['prefix'])) {
 							$path['prefix'] = "";	
 						}else{
 							$path['prefix'] .='\\';
 						}
				 	// var_dump($path);
				   $this->route = $path;


				   return true;
				}
  
	 		}
	 		return false;	
 	  }

 	   public function run()
		 { 

		 	if ($this->matchRoute()) {
		 		var_dump($this->route);
		 	   $controller = 'controllers\\'.$this->route['prefix'].
	 	  					$this->upperCamelCase($this->route['controller']).'Controller' ;
	 	  		 
		 		  $action = 'action'.$this->upperCamelCase($this->route['action']);
		 		 
 // var_dump($this->route);
		 		 
		 			 
			 	  if (class_exists($controller)) {
			 	  	 
			 	  	 $cObj = new $controller($this->route);
			 	   
			 	  	 if (method_exists($controller,$action)) {
			 	  	 	$cObj->$action();
			 	  	 	 
			 	  	 }
			 	  	 else{
			 	  	  	throw new Exception("action in controller {$this->route['controller']} not found", 404);
			 	  	  	
			 	  	 	 
			 	  	 }
			 	  }
			 	  else{
			 	  	throw new Exception("controller   {$this->route['controller']} not found", 404);
			 	 	 
			 	  }
			 }
			 else{
			 	throw new Exception("страница не найдена", 404);
			 	 
			 }

		 		
		}

	private function upperCamelCase($val)
	{
		$val = str_replace('-', ' ', $val);
		$val = ucwords($val);
		$val = str_replace(' ', '', $val);
		 return $val;
	}

	 

	 
}