<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php
	 include_once 'sub/css.php'
   ?>
</head>
<body>
	<header>
		<?php
			include_once'sub/headerUser.php';
		?>
	</header>
	<section>
		<div class="container">
		<form class="form-horizontal" action="save-update" method="post" enctype="multipart/form-data">
			<input type="hidden" class="col-sm-2 col-sm-offset-1" name='UserID' value="<?php echo $user->user_id ?>">
		    <div class="form-group">
		      <label for="Email" class="col-sm-2 col-sm-offset-1 control-label" >Email</label>
		      <div class="col-sm-6">
		        <input type="Email" class="form-control" id="Email" name='Email' disabled value="<?php echo $user ->email ?>">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="Name" class="col-sm-2 col-sm-offset-1 control-label">Name</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" id="Name" name='UserName' value="<?php echo $user ->name ?>">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="Address" class="col-sm-2 col-sm-offset-1 control-label">Address</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" id="Address" name='Address' value="<?php echo $user ->address ?>">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="Password" class="col-sm-2 col-sm-offset-1 control-label">Password old</label>
		      <div class="col-sm-6">
		        <input type="password" class="form-control" id="Password" name="Password" value="">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="Password new" class="col-sm-2 col-sm-offset-1 control-label">Password new </label>
		      <div class="col-sm-6">
		        <input type="password" class="form-control" id="Password" name="Password1" value="">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="Password1" class="col-sm-2 col-sm-offset-1 control-label" >Confirm Password</label>
		      <div class="col-sm-6">
		        <input type="password" class="form-control" id="Password1" name="Password2" placeholder="Confirm Password">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="file" class="col-sm-2 col-sm-offset-1 control-label">File input</label>
		      <div class="col-sm-6">
		      	<label>Avatar</label>
					<?php
						if($user ->avatar!= null){
					?>
						<br>
						<img src="<?= $user ->avatar ?>" width="200">
						<br>
					<?php
						}
					?>
		        <input type="file" id="file" name="Avatar" >
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="pull-right col-sm-5">
		        <button type="submit" class="btn btn-primary">Singup</button>
		        <button type="submit" class="btn btn-default">Cencel</button>
		      </div>
		    </div>
		  </form>
		</div>
	</section>
	<footer>
	   <?php include_once 'sub/footer.php' ?>
  	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <div id="go-to-top" style="display: block;"><i class="fa fa-arrow-up" aria-hidden="true"></i></div></div>
	<script src="public/jQuery/jquery.min.js"></script>
	<script src="public/js/owl.carousel.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/style.js"></script>
</body>
</html>

v