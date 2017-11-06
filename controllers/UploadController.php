<?php
require_once 'models/BaseModel.php';
require_once 'models/Categories.php';


class UploadController
{
	function addUpload()
	{
		$cate=Categories::all();
		include_once 'views/client/upload.php';
	}
	function saveUpload()
	{
	}
}