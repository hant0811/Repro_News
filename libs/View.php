<?php
	if ( ! defined('SITE_PATH')) die ('Bad requested!'); //BAO MAT
	class View{
		public $title;
		public function __construct(){

	    }
		public function render($link, $noInclude = ""){
			if($noInclude == ""){
				require_once(MODEL_PATH.'template_Model.php');
				$this->template = new template_Model;
				$this->comment = $this->template->getCommentInSideBar();
				$this->recent = $this->template->getRecentInSideBar();
				$this->popular = $this->template->getPopularInSideBar();
				$this->footer = $this->template->getPageFooter();
				require_once TEMPLATES_PATH."Header.php";
				require(VIEW_PATH.$link.".php");
				require_once TEMPLATES_PATH."Sidebar.php";
				require_once TEMPLATES_PATH."Footer.php";
			}else{
				require(VIEW_PATH.$link.".php");
			}
		}
		public function renderAdmin($link, $noInclude = ""){
			if($noInclude == ""){
				require_once TEMPLATES_PATH."HeaderAdmin.php";
				require_once TEMPLATES_PATH."SidebarAdmin.php";
				require(VIEW_PATH.$link.".php");
				require_once TEMPLATES_PATH."FooterAdmin.php";
			}else{
				require(VIEW_PATH.$link.".php");
			}
		}
		public function renderPartirial($link){
			
				require(VIEW_PATH.$link.".php");
			
		}
		public function redirect($link = ''){
			ob_start();
			if($link != ''){
				$link = SITE_PATH.$link;
			}
			else{
				$link = SITE_PATH;
			}
			header("Location:$link");
		}
	}
?>