<?php 
/**
* 
*/
class Authorization 
{
	static public function Authorize($role) {
		if(isset($_SESSION['login']) && $_SESSION['role'] == $role) 
			return true;
		return false;

	}
}

?>