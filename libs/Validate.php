<?php 
/**
* 
*/
class Validate 
{
	public function escape_data($data) {
		if(ini_get('magic_quotes_gpc')) {
			$data = stripslashes($data);
		}
		return $data;
	}
}

?>
