<?php
	class category_Model extends Model{
		public function __construct(){
			 parent::__construct();
		}

		public function slide($id){
			$sql = "SELECT n.news_title, n.image, n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on, COUNT(c.ID) as count, n.content FROM news as n LEFT JOIN comments as c ON n.ID = c.news_id WHERE n.category_ID = $id ORDER BY n.date LIMIT 6";
			return $this->db_select($sql);
		}

		public function getCategory() {
			$sql = "SELECT * from categories";
			return $this->db_select($sql);
		}

		public function title($id){
			$sql = "SELECT * FROM categories WHERE ID = $id";
			return $this->get_a_record($sql);
		}

		public function lastPost($id){
			$sql = "SELECT n.news_title, n.image, n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on, COUNT(c.ID) as count, n.content FROM news as n LEFT JOIN comments as c ON n.ID = c.news_id WHERE n.category_ID = $id ORDER BY n.date DESC LIMIT 3";
			return $this->db_select($sql);
		}

		public function allPost($id){
			$sql = "SELECT n.news_title, n.image, n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on, COUNT(c.ID) as count, n.content FROM news as n LEFT JOIN comments as c ON n.ID = c.news_id WHERE n.category_ID = $id ORDER BY n.date DESC";
			return $this->db_select($sql);
		}
		// GET POST FONTEND


		//BACKEND
		public function addCat($data){
			$uid = Session::get('user');
			return $this->db_insert('categories', array('cat_title' => $data['catname'] , 'parent_ID' => $data['parent'], 'user_ID' => $uid));
		}

		public function showCat(){
			$sql = "SELECT c.ID, c.cat_title, u.username FROM categories as c INNER JOIN users as u ON c.user_ID = u.ID ORDER BY c.ID DESC";
			return $this->db_select($sql);
		}

		public function deleteCat($id){
			return $this->db_delete_by_id('categories', $id);
		}

		public function editCat($data, $id){
			return $this->db_update_by_id('categories', array('cat_title' =>$data['catname'] , 'parent_id' => $data['parent']), $id);
		}

		public function showCatById($id){
			$sql = "SELECT cat_title, parent_id FROM categories WHERE ID = {$id}";
			return $this->get_a_record($sql);
		}
	}
?>