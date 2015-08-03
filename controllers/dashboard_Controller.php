<?php
	class dashboard_Controller extends Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->view->title = "Dashboard";
			if(Authorization::Authorize('Admin')) {
				$this->view->title = "Dashboard";
				$this->view->cat = $this->model->getCat();
				$this->view->post = $this->model->getPost();
				$this->view->comment = $this->model->getComment();
				$this->view->user = $this->model->getUser();
				$this->view->page = $this->model->getPage();
				$this->view->renderAdmin("dashboard/index");	
			}
			else {
				$this->view->render("user/index");
			}
			
		}
	}
?>