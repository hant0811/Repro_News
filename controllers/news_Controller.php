<?php
	class news_Controller extends Controller{
		public function __construct(){
			require_once(MODEL_PATH."category_Model.php");
			$this->category = new category_Model;
			parent::__construct();
		}

		public function news($id){
			if(empty($id)){
				$this->view->redirect();
			}else{
				$this->view->news = $this->model->getNewsByID($id); //LAY POST DUA VAO ID
				$this->view->title = $this->view->news['news_title']; //TITLE CUA POST
				$this->view->related = $this->model->getRelatedPost($this->view->news['ID']); //LAY CAC BAI VIET TRONG CUNG CATEGORY DUA VAO ID CUA CATE
				$this->view->user = $this->model->getUser($this->view->news['user_ID']);
				$this->view->newsComment = $this->model->getComment($id);
				//include template
				//INSERT COMMENT
				if(isset($_POST['submit'])){
					if(empty($_POST['comment'])){
						$this->view->error = "<p class='warning'>Vui lòng nhập Comment</p>";
						$this->view->render("news/news");
					} else {
						$this->data = mysqli_real_escape_string($this->model->connect, $_POST['comment']);
						$this->model->insertComment($id, $this->data);
						$this->view->redirect("tin-tuc/{$id}#post-comments");
					}
				} else {
					$this->view->render("news/news");
				}
			}
		}


		//////////////////////////////////////////////////////////////////////////////////////////////////////
		////////END FONTEND
		/////////////////////////////////////////////////////////////////////////////////////////////////////
		
		public function listnewsadmin(){
			$this->view->title = "List post";
			$this->view->data = $this->model->getlistnews();
			$this->view->renderAdmin("news/listnewsadmin");
		}

		public function addNews(){
			if(Authorization::Authorize('Admin')) {
				$this->view->title = "Add New Post";
				$this->view->cat = $this->category->getCategory();
				if(isset($_POST['submit'])){
					///////////////////////////////////////
					//VALIDATE FORM
					//////////////////////////////////////
					$error = NULL;
					$data = array();
					if(isset($_POST['title'])){
						$data['title'] = $this->model->escape($_POST['title']);
					} else {
						$error[] = 'title';
					}

					if(isset($_POST['category']) && filter_var($_POST['category'], FILTER_VALIDATE_INT, array('min_range' => 1))){
						$data['category'] = $_POST['category'];
					} else {
						$error[] = 'category';
					}

					///////////////////////////////////////////////
					//VALIDATE IMAGE
					///////////////////////////////////////////////
					if(isset($_FILES['image'])){
							$allow = array('image/jpg','image/jpeg', 'image/png', 'image/gif');
							if(in_array(strtolower($_FILES['image']['type']), $allow)){
								$tmp = explode('.', $_FILES['image']['name']);
								$ext = end($tmp);
								$reName = uniqid(rand(),true).'.'.$ext;
								if(!move_uploaded_file($_FILES['image']['tmp_name'], "public/public/upload/images/".$reName)){
									$this->view->error['image'] = "Vui long nhap Image";
								} else {
									$data['image'] = SITE_PATH . "public/public/upload/images/".$reName;
								}

							} else {
								$this->view->error['image2'] = "Ko dung dinh dang";
							}
						}

					///////////////////////////////////////////////////////
					//END VALIDATE
					//////////////////////////////////////////////////////

					if(isset($_POST['content'])){
						$data['content'] = Functions::the_content($_POST['content']);
					}else {
						$error[] = 'content';
					}

					if(isset($_POST['status'])){
						$data['status'] = $_POST['status'];
					}else {
						$error[] = 'status';
					}


					if(empty($error)){
						$this->model->addPost($data);
						$this->view->redirect('news/addnews');
					}else {
						$this->view->renderAdmin("news/addnews");
					}
				}else{
					$this->view->renderAdmin("news/addnews");
				}
			} else {
				$this->view->render("user/index");
			}
		}


		public function edit($id) {
			if(Authorization::Authorize('Admin')) {
				$this->view->title = "Edit Post";
				$this->view->cat = $this->category->getCategory();
				$this->view->news = $this->model->getPostById($id);
				if(isset($_POST['submit'])){
					///////////////////////////////////////
					//VALIDATE FORM
					//////////////////////////////////////
					$error = NULL;
					$data = array();
					if(isset($_POST['title'])){
						$data['title'] = $this->model->escape($_POST['title']);
					} else {
						$error[] = 'title';
					}

					if(isset($_POST['category']) && filter_var($_POST['category'], FILTER_VALIDATE_INT, array('min_range' => 1))){
						$data['category'] = $_POST['category'];
					} else {
						$error[] = 'category';
					}

					///////////////////////////////////////////////
					//VALIDATE IMAGE
					///////////////////////////////////////////////
					if(isset($_FILES['image'])){
							$allow = array('image/jpg','image/jpeg', 'image/png', 'image/gif');
							if(in_array(strtolower($_FILES['image']['type']), $allow)){
								$tmp = explode('.', $_FILES['image']['name']);
								$ext = end($tmp);
								$reName = uniqid(rand(),true).'.'.$ext;
								if(!move_uploaded_file($_FILES['image']['tmp_name'], "public/public/upload/images/".$reName)){
									$this->view->error['image'] = "Vui long nhap Image";
								} else {
									$data['image'] = SITE_PATH . "public/public/upload/images/".$reName;
								}

							} else {
								$this->view->error['image2'] = "Ko dung dinh dang";
							}
						}

					///////////////////////////////////////////////////////
					//END VALIDATE
					//////////////////////////////////////////////////////

					if(isset($_POST['content'])){
						$data['content'] = Functions::the_content($_POST['content']);
					}else {
						$error[] = 'content';
					}

					if(isset($_POST['status'])){
						$data['status'] = $_POST['status'];
					}else {
						$error[] = 'status';
					}


					if(empty($error)){
						$this->model->editById($data, $id);
						$this->view->redirect('news/edit/'.$id);
					}else {
						$this->view->renderAdmin('news/edit');
					}
				} else {
					$this->view->renderAdmin('news/edit');
				}
			}
			else {
				$this->view->render("user/index");
			}
		}
	}
?>