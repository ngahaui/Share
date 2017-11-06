<?php
require_once 'models/BaseModel.php';
require_once 'simple_html_dom.php';
require_once 'models/BaseModel.php';
require_once 'models/Categories.php';
require_once 'models/Ebooks.php';

class EbookControllerMod
{
	function listIndexMod(){
		if($_SESSION['AUTH']['level']>0){
			$id=$_GET['id'];
			//tìm user_id
			$ebook = Ebooks::findA($id);

			$cate_id=Ebooks::find($id);
			
			//tim danh muc
			$Cate_Book = Categories::findCategories($cate_id->category_id);
			// $Ebook=(array)$Ebook;
			include_once 'views/mod/ebook.php';
		}
	}
	// function addEbook()
	// {
	// 	$html=file_get_html("http://tailieu.vn/");
	// 	$chung=$html->find(".item");
	// 	foreach ($chung as $c) {
	// 		$t=$c->find(".tlmask .ctitle h3",0)->innertext;
	// 		$image=$c->find(".tlmask img",0)->src;
	// 		$u='upload/'.basename($image);
	// 		file_put_contents($u, file_get_contents('http:'.$image));
	// 		$anh='upload/'.basename($image);
	// 		$links=$c->find(".tlmask ")->href;


	// 		$category='';
	// 		$ebook=new Ebook();
	// 		$ebook->Title=$t;
	// 		$ebook->Pictrue=$anh;
	// 		$ebook->Linkfile=$links;
	// 		$ebook->insert();
	// 		// header("location:index.php");
	// }
}
