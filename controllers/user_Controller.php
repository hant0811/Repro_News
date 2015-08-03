<?php
	class user_Controller extends Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view->user = $this->model->getUser();
			$this->view->render("user/index");
		}

		public function login(){
			$this->view->title = 'Login';
			if(isset($_POST['login'])) {
				$this->view->message = NULL;
				if(empty($_POST['username'])) {
					$username = false;
					$this->view->message .= "<p> Chưa nhập username </p>";
				}
				else {
					$username = Validate::escape_data($_POST['username']);
				}
				if(empty($_POST['password'])) {
					$password = false;
					$this->view->message .= "<p> Chưa nhập password </p>";
				}
				else {
					$password = Validate::escape_data($_POST['password']);
				}

				if($username && $password) {
					$row = $this->model->login($username, $password);
					if($row) {
						$_SESSION['login'] = true;
						$_SESSION['fullname'] = $row['fullname']; 
						$_SESSION['role'] = $row['role']; 
						$_SESSION['user'] = $row['ID']; 
						$_SESSION['time'] = time();
						$this->view->redirect("home/index");
						
					}
					else {
						$this->view->message = '<p> Email or password do not exist</p>';
					}
				}
				else {
					$this->view->message .= '<p> Hãy thử lại</p>';
				}
			}
			$this->view->render("user/login");
			
		}

		public function logout(){
			$_SESSION = array();
			session_destroy();
			setcookie('PHPSESSID', '', time()-300, '/', '', 0);
			$this->view->redirect("home/index");
		}
		
		

	}
?>
