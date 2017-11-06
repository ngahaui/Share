<?php
require_once 'models/BaseModel.php';
require_once 'simple_html_dom.php';

class EbookController
{
	function listIndexEbook(){
		if($_SESSION['AUTH']['level']==2){
			$cate_book =Categories::all();
			$ebook=Ebooks::all();
			include_once 'views/admin/ebooks/ebook.php';
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
