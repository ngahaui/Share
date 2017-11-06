<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="public/font-awesome/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/font-awesome/css/font-awesome.min.css">
  <link href="public/font-awesome/css/owl.carousel.css" rel="stylesheet">
    <link href="public/font-awesome/css/owl.theme.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/font-awesome/css/style.css">
</head>
<body>
<div class="container">
  <form class="form-horizontal" action="post-singup" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <div class="flow">
        <div class="col-sm-offset-4 col-xs-offset-2">
          <a  class="btn btn-danger"><i class="fa fa-google-plus" aria-hidden="true"></i>  Login on Google</a>
          <a class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i>  Login on Facebook</a>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="Email" class="col-sm-2 col-sm-offset-1 control-label" >Email</label>
      <div class="col-sm-6">
        <input type="Email" class="form-control" id="Email" placeholder="Email" name='Email'>
      </div>
    </div>

    <div class="form-group">
      <label for="Name" class="col-sm-2 col-sm-offset-1 control-label">Name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="Name" name='UserName' placeholder="Name">
      </div>
    </div>

    <div class="form-group">
      <label for="Address" class="col-sm-2 col-sm-offset-1 control-label">Address</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="Address" name='Address' placeholder="Address">
      </div>
    </div>

    <div class="form-group">
      <label for="Password" class="col-sm-2 col-sm-offset-1 control-label">Password</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="Password1" class="col-sm-2 col-sm-offset-1 control-label" >Confirm Password</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="Password1" name="Password1" placeholder="Confirm Password">
      </div>
    </div>

    <div class="form-group">
      <label for="file" class="col-sm-2 col-sm-offset-1 control-label">File input</label>
      <div class="col-sm-6">
        <input type="file" id="file" name="Avatar">
      </div>
    </div>
    <div class="form-group">
      <div class="pull-right col-sm-5">
        <button type="submit" class="btn btn-primary">Singup</button>
        <button type="submit" class="btn btn-default">Cancel</button>
      </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      <p>Bạn đã có tài khoản <a href="login">Login</a></p>
    </div>
  </div>
  </form>
</div>
<script src="public/jQuery/jquery.min.js"></script>
  <script src="public/js/owl.carousel.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/style.js"></script>
</body>
</html>