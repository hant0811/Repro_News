<?php
	if ( ! defined('SITE_PATH')) die ('Bad requested!'); //BAO MAT
	class Session{
		public static function __init(){
			if(!isset($_SESSION)) {
				session_start();
			}
			
		}
		public static function set($key,$value){
			$_SESSION[$key] = $value;
		}
		public static function get($key){
			if(isset($_SESSION[$key])){
			return $_SESSION[$key];
			}
		}
		public static function unset_session($sessionName){
			unset($_SESSION[$sessionName]);
		}
	}
?>