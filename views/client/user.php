<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user</title>
	<?php
	 include_once 'sub/css.php'
  	?>
</head>
<body>
  	<header>
 	<?php
    	include_once 'sub/headerUser.php'
 	 ?>
  	</header>
	<section>
		<div class="container">
			<div class="col-xs-12">
				<ol class="breadcrumb">
				  <li><a href="index.php">Trang chủ</a></li>
				  <li><a href="#">My profile</a></li>
				  <li class="active">
					<?php
					if(isset($_SESSION['AUTH'])): ?>
						<?php echo $_SESSION['AUTH']['name'] ?>
					<?php endif ?>
				  </li>
				</ol>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="<?= $user ->avatar ?>"
					width="120" alt="...">
				    </a>
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading">
					<?php
						if(isset($_SESSION['AUTH'])): ?>
							<h5><?php echo $_SESSION['AUTH']['name'] ?></h5>
					<?php endif ?>
				    </h4>
				    <p>upload: 6</p>
				    <p>tham gia: 11/11/2016</p>
				    <a href="update-user&id=<?php echo $user->user_id ?>" class="updateUser">Edit</a>
				    <a href="delete-user&id=<?php echo $user->user_id ?>" class="updateUser">Delete</a>
				    <!-- <button type="button" class="btn btn-primary">edit</button> -->
				    <!-- <button type="button" class="btn btn-danger">delete</button> -->
				  </div>
				</div>
			</div>
			<!--  -->
			<div class="col-md-12 col-sm-12 col-xs-12 chon">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class=" row col-md-4 col-sm-4 col-xs-6 form-group">
						    <select class="form-control">
							  <option>Gần đây</option>
							  <option>Xem nhiều</option>
							  <option>Cũ nhất</option>
							  <option>Lượt thích</option>
							</select>
						</div>
						<div class="checkbox col-md-4 col-sm-4 col-xs-4 form-group ">
						  <label>
						    <input type="checkbox" value="">
						    Chọn tất cả
						  </label>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
								<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- search book -->
			            <div class="search-box"> 
			              <form class="search-form" action=""> <input class="form-control" placeholder="tìm kiếm" type="text"> 
			               <button class="btn btn-link search-btn"><i class="fa fa-search" aria-hidden="true"></i></button> 
			              </form> 
			            </div> <!-- end search book -->
					</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 ">
				<p>Upload</p>
				<a href="" class="pull-right">View all</a>
				<div class="danh-sach-upload">
					<div class="items">
						<div class="col-md-3 col-sm-3 col-xs-4">
							<div class="thumbnail">
			                  	<a href="detail.php">
			                  		<div class="checkbox kich_chon">
									    <input type="checkbox" value="">
									</div>
			                    	<img src="public/images/bia_sach1.jpg" alt="...">
			                   	</a>
			                   	<div class="caption">
			                   		<div class="detail-item">
			                   			<a href="detail.php">Lap trình c++</a>
			                   			<div>
			                   				<span class="time"> 2/1/2106, 48 page</span>
			                   			</div> 
			                   		</div>
			                   		<div>
			                   			<i class="fa fa-eye " aria-hidden="true">&nbsp; 3000</i>
			                   			<i class=" fa-ul fa fa-download " aria-hidden="true">&nbsp; 2120</i>
			                   			<i class=" fa fa-heart " aria-hidden="true">&nbsp; 1220 </i>
			                   			<i class="fa fa-comment-o" aria-hidden="true">22</i>
			                   		</div>
			                   		<div class="text-center">
			                   			<p>
			                   				<a href="edit.php" class="btn btn-primary" role="button">Edit</a> <a href="detail.php" class="btn btn-default" role="button">Preview</a>
			                   			</p>
			                   		</div>
		                   		</div>
							</div>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 ">
				<p>Download</p>
				<a href="" class="pull-right">View all</a>
				<div class="danh-sach-upload">
					<div class="items">
						<div class="col-md-3 col-sm-3 col-xs-4">
							<div class="thumbnail">
			                  	<a href="detail.php">
			                  		<div class="checkbox kich_chon">
									    <input type="checkbox" value="">
									</div>
			                    	<img src="public/images/bia_sach1.jpg" alt="...">
			                   	</a>
			                   	<div class="caption">
			                   		<div class="detail-item">
			                   			<a href="detail.php">Lap trình c++</a>
			                   			<div>
			                   				<span class="time"> 2/1/2106, 48 page</span>
			                   			</div> 
			                   		</div>
			                   		<div>
			                   			<i class="fa fa-eye " aria-hidden="true">&nbsp; 3000</i>
			                   			<i class=" fa-ul fa fa-download " aria-hidden="true">&nbsp; 2120</i>
			                   			<i class=" fa fa-heart " aria-hidden="true">&nbsp; 1220 </i>
			                   			<i class="fa fa-comment-o" aria-hidden="true">22</i>
			                   		</div>
			                   		<div class="text-center">
			                   			<p>
			                   				<a href="edit.php" class="btn btn-primary" role="button">Edit</a> <a href="detail.php" class="btn btn-default" role="button">Preview</a>
			                   			</p>
			                   		</div>
		                   		</div>
							</div>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
	    <?php
			include_once'sub/footer.php';
		?>
  	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <div id="go-to-top" class="glyphicon glyphicon-chevron-up" style="display: block;"></div>
	<script src="public/jQuery/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="public/js/owl.carousel.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/style.js"></script>
</body>
</html>