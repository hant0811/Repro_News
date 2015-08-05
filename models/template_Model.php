<?php 

	class template_Model extends Model{
		public function __construct(){
			 parent::__construct();
	    }
	    public function getCommentInSideBar(){
	    	$sql = "SELECT u.avatar, c.content, c.date, u.username, DATE_FORMAT(c.date, '%b %d %Y') as post_on FROM comments AS c INNER JOIN users AS u ON c.user_ID = u.ID ORDER BY c.date DESC LIMIT 6 ";
	    	return $this->db_select($sql);
	    }

	    public function getRecentInSideBar(){
	    	$sql = "SELECT n.image, n.news_title, n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on , COUNT(c.ID) as count FROM news AS n LEFT JOIN comments AS c ON n.ID = c.news_ID GROUP BY n.ID ORDER BY n.ID DESC LIMIT 6";
	    	return $this->db_select($sql);
	    }

	    public function getPopularInSideBar(){
	    	$sql = "SELECT n.image, n.news_title,n.ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on , COUNT(c.ID) as count FROM news AS n LEFT JOIN comments AS c ON n.ID = c.news_ID GROUP BY n.ID ORDER BY count DESC LIMIT 6";
	    	return $this->db_select($sql);
	    }

	    public function getPageFooter(){
	    	$sql = "SELECT title, content FROM pages ORDER BY ID DESC LIMIT 3";
	    	return $this->db_select($sql);
	    }

	    public function getHeader(){
	    	$sql = "SELECT cat_title, ID FROM categories";
	    	return $this->db_select($sql);
	    }
	}

 ?>