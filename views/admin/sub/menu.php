<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="" class="navbar-brand">Share</a>
    </div>
    <div class="navbar-collapse collapse" id="menu">
        <ul class="nav navbar-nav">

        <?php
            if($_SESSION['AUTH']['level']==2){
            ?>
            <li class="dropdown">
                <a data-toggle="dropdown" href="">
                    <span class="glyphicon glyphicon-th-list"></span>Quản lý danh mục
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thêm mới danh mục</a></li>
                    <li><a href="#">Hiển thị danh mục</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" href="">
                    <span class="glyphicon glyphicon-user"></span> Quản lý người dùng
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Danh sách người dùng</a></li>
                    <li><a href="#">Thêm Mod</a></li>
                    <li><a href="#">Danh sách Mod</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" href="">
                    <span class="glyphicon glyphicon-book"></span>Quản lý tài liệu
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thêm mới tài liệu</a></li>
                    <li>
                        <a href="ebookUp&id=<?php echo $_SESSION['AUTH']['user_id'] ?>">
                        Danh sách chờ duyệt
                        </a>
                    </li>
                    <li><a href="ebook&id=<?php echo $_SESSION['AUTH']['user_id'] ?>">Hiển thị tài liệu</a></li>
                    <div class="divider"></div>
                    <li><a href="#">Danh sách yêu cầu</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" href="">
                    <span class="glyphicon glyphicon-phone"></span>Quản lý quyền
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thêm mới quyền</a></li>
                    <li><a href="#">Sửa quyền</a></li>
                    <li><a href="#">Xóa quyền</a></li>
                </ul>
            </li>
            <?php } ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"></span> Setting<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#EditPassword"  data-toggle="modal">Edit Password</a></li>
                <li><a href="#EditProfile"   data-toggle="modal">Profile</a></li>
                <li class="divider"></li>
                <li><a href="logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
</div>