<?php
	class home_Model extends Model{
		public function __construct(){
			 parent::__construct();
	    }

	    public function getCategoryHomePage() {
			$sql = "Select * from categories";
			$category = $this->db_select($sql);
			$result  = array(
				'');
			foreach ($category as $key => $value) {
				$result[$key] = $value;
				$sql2 = "SELECT n.image, n.news_title, n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on, COUNT(c.ID) as count FROM news AS n LEFT JOIN comments AS c ON n.ID = c.news_ID WHERE n.category_ID = {$value['ID']} GROUP BY n.ID ORDER BY n.date DESC LIMIT 3";
				$news = $this->db_select($sql2);
				foreach ($news as $key1 => $value1) {
					$result[$key]['post'][$key1] = $value1;
				}
			}
			return $result;
		}

		public function getRecentPost(){
			$sql = "SELECT n.image,n.news_title, n.content,n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on , COUNT(C.ID) as count FROM news AS n LEFT JOIN comments AS c ON n.ID = c.news_ID GROUP BY n.news_title ORDER BY n.date DESC LIMIT 3";
			return $this->db_select($sql);
		}

		public function getSlidePost(){
			$sql = "SELECT n.image,n.news_title, n.content, n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on , COUNT(C.ID) as count FROM news AS n LEFT JOIN comments AS c ON n.ID = c.news_ID GROUP BY n.news_title ORDER BY n.date DESC LIMIT 6";
			return $this->db_select($sql);
		}
	}
?>