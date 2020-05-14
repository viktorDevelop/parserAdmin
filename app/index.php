<?
namespace app;
use libs\Database;
use libs\Router;
session_start();

 spl_autoload_register(function($clases){

 	  $file = str_replace('\\', '/', $clases).'.php';
 	if (file_exists($file) ) {
 		 include  $file;
 	}
 	  
 });


// $data =   Database::getInstance();

// echo "<pre>";
// print_r($result);
$router = new Router;
$router->run();
