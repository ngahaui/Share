<?php
	require_once 'BaseModel.php';
	require_once 'Categories.php';

	/**
	* 
	*/
	class Ebooks extends BaseModel
	{
		public $tableName = 'ebooks';
		public $columns=['category_id','title','decription','status','upload_link','user_id','downloads','views','date_accept','date_created'];
		public function getAuthor(){
		$user = User::find($this->user_id);
		if(!$user) return null;
		return $user->name;	
		}
		public function getEmail(){
		$user = User::find($this->user_id);
		if(!$user) return null;
		return $user->email;	
		}
		public function getPicture(){
			$user = User::find($this->user_id);
			if(!$user) return null;
			return $user->avatar;	
		}
		public function getCateName(){
			$cate = Categories::findCategories($this->category_id);
			if(!$cate) return null;
			return $cate->category_name;	
		}
	}
?>