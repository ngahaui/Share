<?php
require_once 'models/BaseModel.php';
require_once 'models/Categories.php';
require_once 'models/Ebooks.php';

class EbookUpControllerMod
{
	function listEbookUpMod()
	{
		if($_SESSION['AUTH']['level']>0){
			$id=$_GET['id'];
			//tìm user_id
			$Ebooks = Ebooks::find($id);
			$cate_id=$Ebooks->category_id;
			//tim danh muc
			$Cate_Book = Categories::findCategories($cate_id);
			

			$E_status=Ebooks::findStatusMod($id);

			// $status=$Ebooks->status;
			// // var_dump($Ebooks->status);die;
			// if($status==1){
			// 	$E_status=Ebooks::findStatus($status);
			// }else {
			// 	$E_status="null";
			// }
			include_once 'views/mod/ebookUp.php';
		}
	}
}
