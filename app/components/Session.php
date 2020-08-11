<?
namespace components;

class Session 
{
	 

	 public static function setSession($param1,$param2)
	 {
	 	  $_SESSION[$param1] = $param2;
	 }

	  public static function get($value = '')
	 {
	 	if (isset($_SESSION[$value]) ) {
	 		 return $_SESSION[$value];
	 	}
	 	
	 }

	 public static function deleteSession()
	 {
	 	session_unset();
	 }

}