<?php
namespace Druto\Session;
class Session
{
	private static $instance=null;

	public static function getInstance()
	{

		if(self::$instance===null)
		{
			session_start();
			self::$instance=new Session();
		}
		return self::$instance;
	}

	public function set($key,$value)
	{
		$_SESSION[$key]=$value;
	}

	public function get($key,$default=null)
	{
		if(isset($_SESSION[$key]))
		{
			return $_SESSION[$key];
		}
		else
		{
			return $default;
		}
	}
}