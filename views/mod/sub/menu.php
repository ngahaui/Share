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
            <li class="dropdown">
                <a data-toggle="dropdown" href="">
                    <span class="glyphicon glyphicon-book"></span>Quản lý tài liệu
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thêm mới tài liệu</a></li>
                    <li>
                        <a href="ebookUpMod&id=<?php echo $_SESSION['AUTH']['user_id'] ?>">
                        Danh sách chờ duyệt
                        </a>
                    </li>
                    <li><a href="ebookMod&id=<?php echo $_SESSION['AUTH']['user_id'] ?>">Hiển thị tài liệu</a></li>
                    <div class="divider"></div>
                    <li><a href="#">Danh sách yêu cầu</a></li>
                </ul>
            </li>
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