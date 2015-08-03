<?php
	class dashboard_Model extends Model{
		public function __construct(){
			 parent::__construct();
		}

		public function getCat(){
			$sql = "SELECT cat_title as count FROM categories";
			return $this->count($sql);
		}

		public function getPost(){
			$sql = "SELECT news_title as count FROM news";
			return $this->count($sql);
		}

		public function getComment(){
			$sql = "SELECT content as count FROM comments";
			return $this->count($sql);
		}

		public function getUser(){
			$sql = "SELECT username as count FROM users";
			return $this->count($sql);
		}

		public function getPage(){
			$sql = "SELECT title as count FROM pages";
			return $this->count($sql);
		}
	}
?>