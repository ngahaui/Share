<?php
require_once 'models/User.php';
require_once 'models/RememberToken.php';


class LoginController
{
	function addLogin()
	{
		include_once 'views/client/login.php';
	}

	function listLogin()
	{
		$remember = isset($_POST['Remember']) == true; // check xem co tick vao remember hay khong
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$user = User::where(['email' ,'=', $email])
						->andWhere(['password' , '=', md5($password)])->first();
		if($user){
			$_SESSION['AUTH'] = [
				'name' => $user->name,
				'password'=> $user->password,
				'avatar' =>$user->avatar,
				'email' => $user->email,
				'user_id' => $user->user_id,
				'level'=>$user->level
			];

			// if($Remember){

			// 	// neu co tick remember thi tao moi ban ghi trong remember tokens va tao cookies
			// 	$rememberToken = RememberToken::find($user->UserID);
			// 	if($rememberToken){
			// 		$rememberToken->delete(); // xoa du lieu cu neu ton tai
			// 	}

			// 	$rememberToken = new RememberToken();
			// 	$Token = md5($user->Email."-".microtime()); // sinh ra Token

			// 	// lay ngay thang nam cua 15 ngay sau
			// 	$date = date("Y-m-d");
			// 	$ExpiredDate = date("Y-m-d",
			// 		strtotime(date("Y-m-d", strtotime($date)) . " +15 days"));

			// 	$rememberToken->UserId = $user->UserID;
			// 	$rememberToken->Token = $Token;
			// 	$rememberToken->ExpiredDate = $ExpiredDate;
			// 	$rememberToken->insert(); // them du lieu moi vao csdl

			// 	// tao cookie
			// 	setcookie("AUTH_TOKEN", $Token, time()+(3600*24*15));
			// 	$Token = isset($_COOKIE['AUTH_TOKEN']) == true ? $_COOKIE['AUTH_TOKEN'] : null;
			// 	if($Token != null){
			// 		$rm = RememberToken::where(['Token', '=', $Token])->first();
			// 		$now = date_create(date('Y-m-d'));
			// 		$dbDate = date_create($rm->ExpiredDate);
			// 		$dateDiff = date_diff($now, $dbDate);

			// 		if($dateDiff->days <= 15){
			// 			$user = User::find($rm->UserID);
			// 			$_SESSION['AUTH'] = [
			// 				'UserName' => $user->UserName,
			// 				'Email' => $user->Email,
			// 				'UserID' => $user->UserID,
			// 			];
			// 		}
			// 	}
			// }
			if(isset($_SESSION['AUTH'])){
				if($_SESSION['AUTH']['level']==1){
					header("location:mod");
				}
				elseif($_SESSION['AUTH']['level']==2){
					header("location:admin");
				}
				else{
					include_once 'views/client/user.php';
					//header("location:home");
				}
			}
		}else{
			echo " <script> alert('Sai email/mat khau!') </script>";
		}
	}
}
