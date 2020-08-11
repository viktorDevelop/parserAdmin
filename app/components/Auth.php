<?
namespace components;
use components\Session;

class Auth 
{
	protected $autorized = false;
	protected $user;
	
	 
	public function autorized()
	{
		return $this->autorized;
	}

	public function user()
	{
		return Session::get('auth.user');
	}

	public function autorize($user)
	{
		Session::setSession('auth.autorized',true);
		Session::setSession('auth.user',$user);
		$this->autorized = true;
		$this->user =      $user;
	}

	public function unAutorized()
	{
		Session::deleteSession('auth.autorized');
		Session::deleteSession('auth.user');
		$this->autorized = false;
		$this->user =      null;
	}

	public static function salt()
	{
		return rand(10000000,99999999);
	}

	public static function encrtiptPassword($password,$salt)
	{
		return  hash('sha256',$password.$salt);
	}





}