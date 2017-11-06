<?php
require_once 'models/BaseModel.php';
require_once 'models/Categories.php';
require_once 'models/Ebooks.php';

class EbookUpController
{
	function listIndexEbookUp()
	{
		if($_SESSION['AUTH']['level']==2){
			
			$Ebooks=Ebooks::findStatus(1);
			// $Ebooks=(int)$Cate->category_id;
			// $Ebooks=Ebooks::findCategories($Ebooks);
			// var_dump($Ebooks);die;
			include_once 'views/admin/ebooks/ebookUp.php';
		}
	}
}
