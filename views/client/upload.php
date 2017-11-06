<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload</title>
	<?php include_once 'sub/css.php' ?>
</head>
<body>
	<header>
		<?php include_once'sub/headerUser.php' ?>
	</header>
	<section>
		<div class="container">
			<div class="file-upload col-md-10 col-md-offset-2 col-sm-12 col-xs-12 ">
				<form>
					<div class="col-md-8 col-sm-7 col-xs-12">
						<div class="form-group">
						    <label for="title-upload">Title</label>
						    <input type="text" class="form-control" id="title-upload" placeholder="">
						</div>
						<div class="form-group">
							<label for="link-upload">Link</label>
						    <input type="text" class="form-control" id="link-upload" placeholder="link upload">
						    <a href="" title="" class="pull-right">Hướng dẫn upload link drive</a>
						</div>
						<div class="form-group">
							<label for="link-upload">Mô tả ngắn</label>
						    <textarea rows="3" cols="80"></textarea>
						</div>
						<div class=" row col-md-5 col-sm-6 col-xs-8">
							<div class="form-group">
							    <label for="category-upload">Chọn danh mục</label>
							    <select class="form-control">
								  <?php foreach ($cate as $cate): ?>
										<option
											value="<?php echo $cate->category_id ?>">
											<?php echo $cate->category_name ?>
										</option>
									<?php endforeach ?>
								</select>
							</div>
						</div>

						<div class="col-md-9 col-sm-6 col-xs-8">
							<label for="">Ảnh hiển thị</label>
							<input type="file" name="">
						</div>
						<div class="col-sm-2 col-md-2 col-xs-3 pull-right">
							<button type="button" class="btn btn-default">Cancel</button>
						</div>
						<div class="col-sm-2 col-md-2 col-xs-3 pull-right">
							<button type="button" class="btn btn-warning">Upload</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<footer>
	    <?php include_once'sub/footer.php' ?>
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