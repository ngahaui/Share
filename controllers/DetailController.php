<?php 
	require_once 'models/BaseModel.php';
	require_once 'models/Categories.php';
	require_once 'models/Ebooks.php';
	class DetailController
	{
		public function view(){
			$ip=$_SERVER['REMOTE_ADDR'];
			$id=$_GET['id'];
			$Ebooks = Ebooks::findEbooks($id);
			$num_view=0;
			if(!$Ebooks){
				echo "<h1>Bài viết không tồn tại</h1>";
				die;
			}
			//3 cap nhat du lieu tu form vao model
			// $Ebooks->ebook_id=$id;
			// $Ebooks->num_view=$num_view+1;
			// $Ebooks->ip = $ip;

			//4 save
			// $Ebooks = $Ebooks->updateBook();
			// var_dump($Ebooks);die;
			
			$cate_id=$Ebooks->category_id;
			$Cate_Book = Ebooks::findCategorys($cate_id);
			include_once 'views/client/detail.php';
		}

		// public function page_view($id)
		// {
		// 	$ip=$_SERVER['REMOTE_ADDR'];
		// 	//2 find model
		// 	$model = Ebooks::findEbooks($id);
		// 	if(!$model){
		// 		echo "<h1>Sai thông tin!</h1>";
		// 		die;
		// 	}
		// 	//3 cap nhat du lieu tu form vao model
		// 	$model->ip = $ip;
		// 	$model->num_view=$model->num_view+1;
		// 	//4 save
		// 	$model = $model->update();
		// }
			
	}
 ?>