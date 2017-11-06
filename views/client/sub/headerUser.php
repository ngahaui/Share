<nav class="navbar navbar-default">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse_menu" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="#">
      			<img src="public/images/logo1.jpg" alt="">
      		</a>
    	</div>
	    <div class="collapse navbar-collapse" id="collapse_menu">
	      	<ul class="nav navbar-nav pull-right col-md-10 col-sm-10  col-xs-12">
	      		<li class="col-md-6 col-sm-6 col-xs-12">
		            <!-- search book -->
		            <div class="search-box">
		              <form class="search-form" action=""> <input class="form-control" placeholder="tìm kiếm" type="text">
		               <button class="btn btn-link search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
		              </form>
		            </div> <!-- end search book -->
	          	</li>
	          	<li class="col-md-2 col-sm-2 col-xs-12">
	          		<a class="btn-md btn-warning" href="upload&id=<?php echo $_SESSION['AUTH']['user_id'] ?>" title="">
                      <i class="fa fa-upload" aria-hidden="true"></i>
                      Upload
                    </a>
	          	</li>
	          	<li class="col-md-2 col-sm-2 col-xs-12">
	          		<button type="button" class="btn btn-warning">
	          		<i class="fa fa-envelope-o" aria-hidden="true"></i>
	          		Yêu Cầu</button>
	          	</li>
	            <li class="col-md-2 col-sm-2 col-xs-12">
	            	<div class="user">
	            		<div class="btn-group">
						  <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true"></i>
						    <?php
							if(isset($_SESSION['AUTH'])): ?>
								<?php echo $_SESSION['AUTH']['name'] ?>
							<?php endif ?>
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href="#">my profile</a></li>
						    <li><a href="#">My upload</a></li>
						    <li><a href="#">my comment</a></li>
						    <li>
						  	<a href="logout" title="">Logout</a>
						  </li>
						  </ul>
						</div>
	            	</div>
	            </li>
      		</ul>
	    </div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>