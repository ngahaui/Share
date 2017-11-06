<?php
	require_once 'BaseModel.php';
	/**
	* 
	*/
	class Categories extends BaseModel
	{
		public $tableName = 'categories';
		public $columns=['category_id','category_name','parent_id','user_id'];
	}
?>