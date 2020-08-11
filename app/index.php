<?
namespace app;
 
use libs\Router;
session_start();

 spl_autoload_register(function($clases){

 	  $file = str_replace('\\', '/', $clases).'.php';
 	if (file_exists($file) ) {
 		 include  $file;
 	}
 	  
 });


 include 'config/config.php';
$router = new Router;
$router->run();
