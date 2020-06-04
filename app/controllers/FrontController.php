<?
namespace controllers;
use libs\View;
use libs\Database;



/**
 * 
 */
class FrontController 
{
	public $view;
	public $load;
	public $db;
	function __construct()
	{
		  $this->view = View::getInstance();
		  $this->db = Database::getInstance();
		 
	}



}