<?php
	class Bootstrap{
		public function __construct(){
			if(isset($_GET['controller'])){
				$c = $_GET['controller'];
			}else{
				  $c = "home";
			}
			$now = time();
			if(isset($_SESSION['login']) && ($now - $_SESSION['time']) > 60*15) {
			  	$_SESSION = array();
				session_destroy();
				setcookie('PHPSESSID', '', time()-300, '/', '', 0);
				View::redirect('user/login');
				die();
			}
		  	$fileController = CONTROLLER_PATH.$c."_Controller.php";
		  	if(file_exists($fileController)){
		      	require_once($fileController);
		  	}else{
				require_once(CONTROLLER_PATH."error_Controller.php");
				$controller = new error_Controller();
				$controller->index();
				return false;
			 }
		  	$nameController = $c."_Controller";
		  	$controller = new $nameController;
		  	$controller->loadModel($c);//autoload model
		  	
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				if(method_exists($controller, $_GET['action'])) {
						$a = $_GET['action'];
						$controller->{$a}($id);
					}
					else {
						require_once(CONTROLLER_PATH."error_Controller.php");
						$controller = new error_Controller();
						$controller->index();
						return false;
					}
				
			}else{
				if(isset($_GET['action'])){
					$a = $_GET['action'];
					if(method_exists($controller, $a)) {
						$controller->{$a}();
					}
					else {
						require_once(CONTROLLER_PATH."error_Controller.php");
						$controller = new error_Controller();
						$controller->index();
						return false;
					}
				}else{
					if(method_exists($controller, "index")) {
						$controller->index();
					}
				  	else {
				  		require_once(CONTROLLER_PATH."error_Controller.php");
						$controller = new error_Controller();
						$controller->index();
						return false;
				  	}
				}
			}
		}
	}
?>