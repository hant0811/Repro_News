<?php
	class category_Controller extends Controller{
		public function __construct(){
			parent::__construct();
		}
		////////////////////////////////
		//FONT-END CATEGORY
		////////////////////////////////
		public function category($id){
			$this->view->slide = $this->model->slide($id);
			$this->view->category = $this->model->title($id);
			$this->view->lastPost = $this->model->lastPost($id);
			$this->view->allPost = $this->model->allPost($id);
			$this->view->render("category/cat");
		}

		////////////////////////////////
		//END FONT-END CATEGORY
		////////////////////////////////
		
		public function addCategory() {
			$this->view->title = "Add Category";
			$this->view->category = $this->model->getCategory();
			$this->data = array();
			//phan quyen
			if(Authorization::Authorize('Admin')) {
				if(isset($_POST['submit'])){
				if(empty($_POST['catname'])){
					$this->view->msg = "Vui lòng nhập tên Category";
					$this->view->render('category/addcategory');
				} else {
					$this->data['catname'] = mysqli_real_escape_string($this->model->connect,$_POST['catname']);
					$this->data['parent'] = $_POST['category'];
					$this->model->addCat($this->data);
					$this->view->msg = "Add category successfully";
					$this->view->redirect('category/listCategory');
				}
				}else {
					$this->view->renderAdmin("category/addcategory");
				}
			}
			else {
				$this->view->render("user/index");
			}
		}

		public function listCategory(){
			if(Authorization::Authorize('Admin')) {
				$this->view->title = "List Categories";
				$this->view->cat = $this->model->showCat();
				$this->view->renderAdmin("category/listcategoryadmin");	
			}
			else {
				$this->view->render("user/index");
			}
			
		}

		public function editCategory($id){
			if(Authorization::Authorize('Admin')) {
				$this->view->category = $this->model->getCategory();
				// viet code xy lu o day
				$this->data = array();
				$this->view->title = 'Edit Category';
				$this->view->cat = $this->model->showCatById($id);
				if(isset($_POST['submit'])){
					if(empty($_POST['catname'])){
						$this->view->msg = "Vui lòng nhập tên Category";
						$this->view->renderAdmin('category/editcategory');
					} else {
						$this->data['catname'] = mysqli_real_escape_string($this->model->connect,$_POST['catname']);
						$this->data['parent'] = $_POST['category'];
						if($this->model->editCat($this->data, $id) == true){
							$this->view->redirect('category/listcategory');
						} else {
							$this->view->msg = "Edit category faild";
							$this->view->renderAdmin('category/editcategory');
						}
					}
				}else {
					$this->view->renderAdmin("category/editcategory");
				}	
			}
			else {
				$this->view->render("user/index");
			}
		}

		public function deleteCat($id){
    		$this->model->deleteCat($id);
		}
	}
?>