<?
namespace controllers;
use libs\View;
/**
 * 
 */
class FrontController  
{
	public $view;

	function __construct()
	{
		 $this->view = View::getInstance();
	}
}