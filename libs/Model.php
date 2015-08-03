<?php 
	class Model{
		public function __construct(){
			if ( ! defined('SITE_PATH')) die ('Bad requested!'); //BAO MAT
			$this->connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if($this->connect->errno !==0) {
		        die("Could not connect to Database");
		    } else {
		        // dat phuong thuc ket noi la utf-8
		        $this->connect->set_charset('utf8');
		    }
		}//END FUNCTION CONNECT TO DB

		
		public function db_disconnect(){
			$this->connect->close();
		}


		public function db_select($sql) {
			$result = $this->connect->query($sql);
			$list = array();
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$list[] = $row;
				}
			}
			return $list;
		}


		public function get_a_record($sql) {
			$result= $this->connect->query($sql);
			$row = $result->fetch_assoc();
			return $row;
		}


		public function db_insert($table, $option = array()){
			$field = NULL;
			$value = NULL;
			foreach ($option as $key => $val){
				$field .= $key.",";
				$value .= "'".$this->connect->real_escape_string($val)."',";
			}
			$sql = "INSERT INTO ".$table."(".trim($field, ',').") VALUES (".trim($value, ',').")";
			return $this->connect->query($sql);
		} //END FUNCTION DB_INSERT


		public function db_update_by_id($table, $option = array(), $id){
			$update_value = NULL;
			foreach($option as $key => $val){
				$update_value .= $key."='".$val."',";
			}
			$sql = "UPDATE ".$table." SET ".trim($update_value, ',')." WHERE ID=".$id."";
			return $this->connect->query($sql);
		}


		public function db_delete_by_id($table, $id){
			$sql = "DELETE FROM ".$table." WHERE ID = ".$id."";
			return $this->connect->query($sql);
		}



		public function count($sql){
			$result = $this->connect->query($sql);
			$row = $result->num_rows;
			if($row) {
				return $row;
			}
			return 0;
		}

		public function escape($str){
			return $this->connect->real_escape_string(strip_tags($str));
		}
}
?>