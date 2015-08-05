<?php
    class news_Model extends Model{
    	public function __construct(){
    		parent::__construct();
        }

        ///////////////////
        //FONTEND
        //////////////////


        public function getNewsByID($id){
            $sql = "SELECT n.news_title, n.content, n.user_ID, DATE_FORMAT(n.date, '%b %d %Y') as post_on, cat.cat_title, cat.ID, count(com.ID) as count FROM categories as cat INNER JOIN news as n ON cat.ID = n.category_ID LEFT JOIN comments as com ON n.ID = com.news_ID WHERE news_ID = {$id}";
            return $this->get_a_record($sql);
        }

        public function getRelatedPost($cat_ID){
            $sql = "SELECT image, news_title, ID FROM news WHERE category_ID = {$cat_ID} ORDER BY rand() LIMIT 4";
            return $this->db_select($sql);
        }

        public function getUser($id){
            $sql = "SELECT username,status FROM users WHERE ID = {$id} LIMIT 1";
            return $this->get_a_record($sql);
        }

        public function getComment($id){
            $sql = "SELECT u.avatar, u.username, u.ID, DATE_FORMAT(c.date,'%b %d %Y %h:%i %p') as post_on, c.content FROM users as u INNER JOIN comments as c ON c.user_ID = u.ID WHERE c.news_ID = '{$id}' ORDER BY c.date ASC";
            return $this->db_select($sql);
        }

        public function insertComment($id, $data){
            return $this->db_insert('comments', array(
                                            'user_ID' => Session::get('ID'),
                                            'news_ID' => $id,
                                            'content' => $data,
                                            'date' => 'NOW()'
                                            ));

        }


        ///////////////////////////////////////////////////////////////////////

        public function getlistnews() {
            $sql = "SELECT news.ID, news.news_title, news.image, news.content, news.date, news.status, categories.cat_title, users.fullname from news 
            LEFT JOIN categories ON news.category_id = categories.ID
            LEFT JOIN users ON news.user_id = users.ID";
            return $this->db_select($sql);
        }
        public function addPost($data){
            $uid = Session::get('ID');
            $this->db_insert('news', array(
                                            'news_title' => $data['title'],
                                            'image' => $data['image'],
                                            'content' => $data['content'],
                                            'category_ID' => $data['category'],
                                            'user_ID' => $uid,
                                            'status' => $data['status'],
                                            'date' => date('Y-m-d H:i:s')
                ));
        }


        public function getPostById($id){
            $sql = "SELECT * FROM news WHERE ID = $id";
            return $this->get_a_record($sql);
        }

        public function editById($data,$id){
            $uid = Session::get('user');
            $this->db_update_by_id('news', array(
                                            'news_title' => $data['title'],
                                            'image' => $data['image'],
                                            'content' => $data['content'],
                                            'category_ID' => $data['category'],
                                            'user_id' => $uid,
                                            'status' => $data['status'],
                                            'date' => date('Y-m-d H:i:s')    
                                         ), $id);
        }

        public function delete($id){
            return $this->db_delete_by_id('news', $id);
        }

    }
?>

