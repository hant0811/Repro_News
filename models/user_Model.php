<?php
	class user_Model extends Model{
		public function __construct(){
			parent::__construct();
	    }
	    public function login($username, $password){
	    	$sql = "SELECT * FROM users WHERE username = '{$username}' and password = '{$password}'";
	    	return $rows = $this->get_a_record($sql);
	    }
	}
?>