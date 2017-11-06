<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sách chờ duyệt</title>
	<?php include_once'views/admin/sub/head.php' ?>
</head>
<body>
	<?php include_once'views/admin/sub/menu.php' ?>
	<div class="panel panel-primary col-lg-10 col-lg-offset-1" style="margin-top: 70px; padding: 0">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-8">Danh sách chờ duyệt</div>
				<div class="col-md-4">
					<div class="input-group input-group-sm">
				      <input type="text" id="input-text-search" class="form-control" data-search="search-user" placeholder="Tìm tiêu đề,từ khóa,mô tả...">
				      <span class="input-group-btn">
				        <button class="btn btn-default" id="btn-text-search" type="button"><span class="glyphicon glyphicon-search"></span></button>
				      </span>
				    </div>
				</div>
			</div>
		</div>
		<div class="panel-body table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr class="info">
						<th>STT</th>
						<th>Email</th>
						<th>Tác giả</th>
						<th>Image</th>
						<th>Title</th>
						<th>Link</th>
						<th>Danh mục</th>
						<th>Date_created</th>
						<th>Hành Động</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($Ebooks as $ebooks): ?>
						<tr class="hide-here">
							<td>1</td>
							<td><?= $ebooks->getEmail() ?></td>
							<td><?= $ebooks->getAuthor() ?></td>
							<td><img src="<?= $ebooks->img ?>" alt="" width="50" height="50"></td>
							<td>Phát triển phần mềm hướng dịch vụ....</td>
							<td><a href="<?= $ebooks->upload_link ?>" title="">Xem tài liệu</a></td>
							<td><?= $ebooks->getCateName() ?></td>
							<td><?= $ebooks->date_created ?></td>
							<td>
								<div class="btn btn-success" title="Chấp nhận" data-flag="" data-action="">
									<span class="glyphicon glyphicon-ok"></span>
								</div>
								<div class="btn btn-danger" title="Hủy bỏ" data-flag="" data-action="">
									<span class="glyphicon glyphicon-remove"></span>
								</div>
							</td>
						</tr>
					<?php endforeach ?>
					
				</tbody>
			</table>
		</div>
	</div>
	<!-- page -->
				<div class="col-xs-12 col-sm-9 col-md-9 col-md-offset-1">
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
</body>
</html>

