<?php
require_once 'models/User.php';
require_once 'models/RememberToken.php';


class SingUpController
{
	function addSingUp()
	{
		include_once 'views/client/singup.php';
	}

	function saveAdd()
	{
		$name=$_POST['UserName'];
		$address=$_POST['Address'];
		$email = $_POST['Email'];
		$avatar=$_FILES['Avatar'];
		$password = md5($_POST['Password']);
		$password1 =md5($_POST['Password1']);

		//kiểm tra mail
		$check=User::checkEmail($email);
		if($check===0){
			echo " <script> alert('Email đã tồn tại');
				window.history.go(-1)
			 </script>";
			 die;
		}
		if($password!==$password1)
		{
			echo " <script> alert('Mật khẩu không trùng khớp đúng');
				window.history.go(-1)
			 </script>";
			 die;
		}
		$fileName = null;
		if($avatar['error'] == 0){
			$fileName = 'uploads/'.uniqid()."-".$avatar['name'];
			move_uploaded_file($avatar['tmp_name'], $fileName);
		}
		$model = new User();
		//3 cap nhat du lieu tu form vao model
		$model->name = $name;
		$model->address = $address;
		$model->email = $email;
		$model->avatar = $fileName;
		$model->password = $password;
		$model->level=0;
		//4 save
		$model = $model->insert();
		if(!$model) {
			echo " <script> alert('Đăng ký không thành công');
				window.history.go(-1)
			 </script>";
			 die;
		}
		$user=User::findNewInsert('user_id');
		$_SESSION['AUTH'] = [
				'name' => $user->name,
				'password'=> $user->password,
				'avatar' =>$user->avatar,
				'email' => $user->email,
				'user_id' => $user->user_id,
				'level'=>$user->level
			];
		include_once'views/client/user.php';
		//header("location:home");

	}


	function update()
	{
		$user = User::find($_GET['id']);
		if(!$user) {
			echo "<h1>Tài khoản không tồn tại</h1>";
			die;
		}
		include_once 'views/client/updateUser.php';
	}
	function saveUpdate()
	{
		$user_id=$_POST['UserID'];
		$name=$_POST['UserName'];
		$address=$_POST['Address'];
		$avatar=$_FILES['Avatar'];
		$password = md5($_POST['Password']);
		$password1 = md5($_POST['Password1']);
		$password2 =md5($_POST['Password2']);

		$pass= $_SESSION['AUTH']['password'];
		if($pass!==$password){
			echo " <script> alert('Mật khẩu không đúng');
			window.history.go(-1) </script>";
			die;
		}
		if($password1!==$password2)
		{
			echo " <script> alert('Mật khẩu không trùng khớp đúng');
			window.history.go(-1) </script>";
			die;
			//header("location:share/update-user&id=".$user_id);
		}
		if($password1==null)
		{
			echo " <script> alert('Mật khẩu không được để trống');
			window.history.go(-1) </script>";
			die;
			//header("location:share/update-user&id=".$user_id);
		}
		$fileName=$_SESSION['AUTH']['avatar'];
		if($avatar['error'] == 0){
			// Dat ten anh
			$fileName = 'uploads/' . uniqid() . "-" . $avatar['name'];
			move_uploaded_file($avatar['tmp_name'], $fileName);
		}
		//2 find model
		$model = User::find($user_id);
		if(!$model){
			// echo "<h1>Sai thông tin!</h1>";
			// header("location:share/update-user&id=".$user_id);
			echo " <script> alert('Sai thông tin');
			window.history.go(-1) </script>";
			die;
		}
		//3 cap nhat du lieu tu form vao model
		$model->name = $name;
		$model->address = $address;
		//$model->Email = $Email;
		$model->avatar = $fileName;
		$model->password = $password1;
		//4 save
		$model = $model->update();
		//echo " <script> alert('Sửa thành công') </script>";
		// echo " <script> alert('Sửa thành công');
		// 	window.history.go(-2) </script>";
		// 	die;
		//5 redirect ve trang chu (list.php)
		//header("location:index.php?url=post-singup&id=".$user_id);
		header("location:home&id=".$user_id);
	}
	function remove()
	{
		$id = $_GET['id'];

		$user = User::find($id);
		if(!$user){
			echo "<h1>Bài viết không tồn tại</h1>";
			die;
		}
		$user->delete();
		header('location: index.php');
	}
}
