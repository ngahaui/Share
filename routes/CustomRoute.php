<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/SingUpController.php';
require_once 'controllers/UploadController.php';
require_once 'controllers/DetailController.php';

require_once 'controllers/Admin/EbookUpController.php';
require_once 'controllers/Admin/EbookController.php';
require_once 'controllers/Mod/EbookUpControllerMod.php';
require_once 'controllers/Mod/EbookControllerMod.php';


class CustomRoute
{
	static function clientRoute($url)
	{
		switch ($url) {
			// trang chu
			case '/':
				$ctl = new HomeController();
				$ctl->index();
				break;
			case 'home':
				//$id=$_SESSION['AUTH']['$user_id']
				include_once "views/client/user.php";
				break;
			case 'logout':
				unset($_SESSION['AUTH']);
				header('location: index.php');
				break;
			// Dang nhap
			case 'login':
				$ctl=new LoginController();
				$ctl->addLogin();
				break;
			case 'post-login':
				$ctl = new LoginController();
				$ctl->listLogin();
				break;

			//Đăng ký
			case 'sing-up':
				$ctl = new SingUpController();
				$ctl->addSingUp();
				break;
			case 'post-singup':
				$ctl = new SingUpController();
				$ctl->saveAdd();
				break;
			//sửa
			case 'update-user':
				$ctl = new SingUpController();
				$ctl->update();
				break;
			case 'save-update':
				$ctl = new SingUpController();
				$ctl->saveUpdate();
				break;

			// xóa
			case 'delete-user':
				$ctl = new SingUpController();
				$ctl->remove();
				break;

			// upload tài liệu
			case 'upload':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new UploadController();
				$ctl->addUpload();
				break;


			//phía admin
			case 'admin':
				include_once 'views/admin/index.php';
				break;
			case 'ebook':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new EbookController();
				$ctl->listIndexEbook();
				break;
			case 'ebookUp':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new EbookUpController();
				$ctl->listIndexEbookUp();
				break;


			//mod
			case 'mod':
				include_once 'views/mod/index.php';
				break;
			case 'ebookUpMod':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new EbookUpControllerMod();
				$ctl->listEbookUpMod();
				break;
			case 'ebookMod':
				if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH'] == null){
					header('location: login');
					die;
				}
				$ctl = new EbookControllerMod();
				$ctl->listIndexMod();
				break;
				// if($_SESSION['AUTH']['level']==2){
				// 	$ctl = new AdminEbookUpController();
				// 	$ctl->listIndexAdmin();
				// 	break;
				// }

			//client
			case 'detail':
				$ctl = new DetailController();
				$ctl->view();
				break;
			default:
				echo "<h1>Not found!</h1>";
				break;
		}
	}
}
