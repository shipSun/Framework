<?php
class Yar_Client {
	protected $_protocol ;
	protected $_uri ;
	protected $_options ;
	protected $_running ;
	
	public final function __construct ( string $url ){}
	public function setOpt ( number $name , mixed $value ){}
	public function __call ( string $method , array $parameters ){}
}
class Yar_Server {
	protected $_executor ;
	
	public final function __construct ( Object $obj ){}
	public function handle (){}
}
class Yar_Concurrent_Client {
	public static $_callstack ;
	public static $_callback ;
	public static $_error_callback ;

	public static function call (string $uri , string $method , array $parameters ,$callback){}
	public static function loop ($callback , $error_callback){}
	public static function reset (){}
}
class Yar_Server_Exception extends Exception{
	protected $_type ;
	
	public function getType(){}
}
class Yar_Client_Exception extends Exception{
	public function getType(){}
}
class Yar_Client_Transport_Exception extends Yar_Client_Exception{
}
define("YAR_OPT_PACKAGER", 1);
define("YAR_OPT_PERSISTENT", 2);
define("YAR_OPT_TIMEOUT", 4);
define("YAR_OPT_CONNECT_TIMEOUT", 8);