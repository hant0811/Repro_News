<?php
	class home_Controller extends Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			// tieu de trang web
			$this->view->title = "Tin nhanh Repro - Đọc báo, tin tức online 24h";
			//hien thi category tren trang chu
			$this->view->category = $this->model->getCategoryHomePage();
			//hien thi news tren trang chu
			$this->view->news = $this->model->getRecentPost();
			//hien thi slide tren trang chu
			$this->view->slide = $this->model->getSlidePost();
			
			//include template
			$this->view->render("home/Index");
		}
	}
?>