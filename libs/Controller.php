<?php
	if ( ! defined('SITE_PATH')) die ('Bad requested!'); //BAO MAT
	class Controller {
		public function __construct(){
			Session::__init();
	        $this->view = new View;
		
	    }
		public function loadModel($name){
			$path = MODEL_PATH.$name."_Model.php";
			if(file_exists($path)){
			require_once($path);
			$name = $name."_Model";
			$this->model = new $name;
			}
		}
	}
?>