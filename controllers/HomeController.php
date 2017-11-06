<?php
require_once 'models/BaseModel.php';

class HomeController
{
	function index()
	{
		$Categories = Categories::all();
		$EbookXemNhieu=Ebooks::XemNhieu();
		$EbookNoiBat=Ebooks::NoiBat();
		include_once 'views/client/index.php';
	}
}
