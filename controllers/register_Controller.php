<?php
	class register_Controller extends Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			if(isset($_POST['submit'])){
				$data = NULL;
				$error = NULL;
				if(isset($_POST['username']) && preg_match('/^[\w\'.-]{6,20}$/', trim($_POST['username']))){

				}
			} else{
				$this->view->render("register");
			}
		}
		
		
	}
?>