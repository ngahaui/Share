<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php
	 include_once 'views/client/sub/css.php'
   	?>
</head>
<body>
	<header>
    <?php
   	 include_once 'views/client/sub/header.php'
  	?>
  </header>
	<section>
		<div class="container">
			<!-- tai lieu noi bat -->
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="danh-muc">
					<h3>Danh mục bài viết</h3>
				</div>
				<div class="danh-muc-con">
					<ul class="nav nav-pills nav-stacked">
						<?php foreach ($Categories as $Cate):?>
					 	<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp; <?= $Cate->category_name ?></a></li>
					 	<?php endforeach ?>
					</ul>
				</div>
			</div><!--end tai lieu noi bat -->
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="tai-lieu-noi-bat">
					<h3>Tài liệu nổi bật</h3>
				</div>
				<!-- slider -->
				<div class="slider">
		          	<div class="owl-item owl-carousel owl-theme thumbnail" >
		          		<?php foreach ($EbookXemNhieu as $ebook): ?>
				            <div class="item">
				                <a href="#" class="thumbnail" >
				                  <img src="<?= $ebook->img?>" width="100%">
				                </a>
				                <p><a href=""><?=$ebook->title?></a>
				            </div>
		          		<?php endforeach ?>
		          	</div>
      			</div><!--end slider -->
			</div>
			<!-- xem nhieu -->
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="tai-lieu-noi-bat">
					<ul class="nav nav-pills">
					  	<li role="presentation" class="active"><a href="#">Xem nhiều</a>
					  	</li>
					</ul>
				</div>
				<div class="danh-sach">
					<?php foreach ($EbookXemNhieu as $ebooks): ?>
						<div class="items">
							<div class="col-md-3 col-sm-4 col-xs-4">
								<div class="thumbnail">
				                  	<a href="views/client/detail.php">
				                    	<img src="<?= $ebooks->img ?>" width="100%">
				                   	</a>
				                   	<div class="caption">
			                   			<i class="fa fa-eye " aria-hidden="true">&nbsp; </i>
			                   			<i class="fa fa-download pull-right" aria-hidden="true">&nbsp; </i>
			                   			<i class="fa fa-heart pull-right" aria-hidden="true">&nbsp; &nbsp;</i>
			                   		</div>
								</div>
								<a href="detail&id=<?php echo $ebooks->ebook_id ?>"> <?=$ebooks->title?> </a>
			                </div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<!-- page -->
			<div class="col-xs-12 col-sm-9 col-md-9">
              <nav aria-label="Page navigation">
				  <ul class="pager">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
            </div>
            <!-- page -->
            
		</div>	
	</section>
	<footer>
	  <?php
	    include_once'views/client/sub/footer.php'
	   ?>
  	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <div id="go-to-top" style="display: block;"><i class="fa fa-arrow-up" aria-hidden="true"></i></div></div>
	<script src="public/jQuery/jquery.min.js"></script>
	<script src="public/js/owl.carousel.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/style.js"></script>
</body>
</html>