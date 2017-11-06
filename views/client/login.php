<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <?php
   include_once 'sub/css.php'
  ?>
</head>
<body>
<div class="container">
  <form class="form-horizontal" action="post-login" method="post">
    <div class="form-group">
      <div class="flow">
        <div class="col-sm-offset-4 col-xs-offset-2">
          <a  class="btn btn-danger"><i class="fa fa-google-plus" aria-hidden="true"></i>  Login on Google</a>
          <a class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i>  Login on Facebook</a>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="Email" class="col-sm-2 col-sm-offset-2 control-label">Email</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="Password" class="col-sm-2 col-sm-offset-2 control-label">Password</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-4">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Remember" value="1"> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="pull-right col-sm-7">
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="submit" class="btn btn-default">Cencel</button>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-4">
        <p>Bạn chưa có tài khoản <a href="singup.php">Singup</a></p>
      </div>
    </div>
  </form> <!-- end form -->
</div>
<script src="public/jQuery/jquery.min.js"></script>
  <script src="public/js/owl.carousel.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/style.js"></script>
</body>
</html>