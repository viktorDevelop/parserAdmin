<?
namespace controllers;
use libs\View;



/**
 * 
 */
class FrontController 
{
	public $view;
	public $load;
	
	function __construct()
	{
		  $this->view = View::getInstance();
		 
	}



}