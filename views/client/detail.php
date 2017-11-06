<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>detail</title>
  <?php
	 include_once 'sub/css.php'
  ?>
  
</head>
<body>
  <header>
 <?php
    include_once 'sub/header.php'
  ?>
  </header>
	<section>
    <div class="container">
      <!-- tHONG TIN BAI VIET-->
      <div class="col-xs-12 col-sm-8 col-md-8">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">   
          <iframe width="100%" height="500px;" src="<?= $Ebooks->upload_link ?>"></iframe>
           
          </div>
          <!-- THONG TIN USER -->
          <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class="media-object" width="150" height="150px" src="<?= $Ebooks->getPicture() ?>" alt="...">
                </a>
                <a href=""><?= $Ebooks->getAuthor()?></a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?= $Ebooks->title ?></h4>
                <p><?= $Ebooks->decription ?></p>
              </div>
            </div>
          </div><!--end THONG TIN USER -->
          <!--tHONG TIN BAI VIET CU THE  -->
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div>
              <i class="fa fa-clock-o" aria-hidden="true"><?= $Ebooks->date_accept ?></i>
              <i class=" fa-ul fa fa-download" aria-hidden="true"><?= $Ebooks->views ?></i>
            </div>
            <button type="button" class="btn btn-primary btn-md">like</button>
            <button type="button" class="btn btn-info btn-md">Share</button>
            <button type="button" class="btn btn-warning">Download</button>  
          </div><!--END tHONG TIN BAI VIET CU THE  -->
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div>
              <form class="form-inline">
                  <!-- img_use -->
                  <div class="form-group ">
                    <img class="media-object" width="50px" height="50px" src="<?= $Ebooks-> getPicture() ?>" alt="...">
                  </div>
                  <div class="form-group ">
                    <label class="sr-only" for="post-comment">comment</label>
                    <input type="text" class="form-control" id="post-comment" placeholder="comment">
                  </div>
                  <button type="submit" class="btn btn-primary">Post</button>
              </form>
            </div>
          </div>
          <!-- comment -->
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="comment">
              <!-- item -->
              <div class="media">
                <div class="media-left media-middle">
                  <a href="#">
                    <img class="media-object" src="public/images/user.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="">Nga ngo</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est distinctio provident porro odit, aperiam maxime dolores, error rem esse.</p>
                </div>
                <div>
                  <a href="" class="pull-right"><i class="fa-ul fa fa-reply " aria-hidden="true">&nbsp;</i>reply</a>
                  <span>
                    <i class="fa fa-calendar-o pull-right" aria-hidden="true">&nbsp; 1hour</i>
                  </span>
                </div>
              </div><!--end item -->
              <!-- item -->
              <div class="media">
                <div class="media-left media-middle">
                  <a href="#">
                    <img class="media-object" src="public/images/user.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="">Nga ngo</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est distinctio provident porro odit, aperiam maxime dolores, error rem esse.</p>
                </div>
                <div>
                  <a href="" class="pull-right"><i class="fa-ul fa fa-reply " aria-hidden="true">&nbsp;</i>reply</a>
                  <span>
                    <i class="fa fa-calendar-o pull-right" aria-hidden="true">&nbsp; 1hour</i>
                  </span>
                </div>
              </div><!--end item -->
              <!-- item -->
              <div class="media">
                <div class="media-left media-middle">
                  <a href="#">
                    <img class="media-object" src="public/images/user.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="">Nga ngo</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est distinctio provident porro odit, aperiam maxime dolores, error rem esse.</p>
                </div>
                <div>
                  <a href="" class="pull-right"><i class="fa-ul fa fa-reply " aria-hidden="true">&nbsp;</i>reply</a>
                  <span>
                    <i class="fa fa-calendar-o pull-right" aria-hidden="true">&nbsp; 1hour</i>
                  </span>
                </div>
              </div><!--end item -->
              <!-- item -->
              <div class="media">
                <div class="media-left media-middle">
                  <a href="#">
                    <img class="media-object" src="public/images/user.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="">Nga ngo</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est distinctio provident porro odit, aperiam maxime dolores, error rem esse.</p>
                </div>
                <div>
                  <a href="" class="pull-right"><i class="fa-ul fa fa-reply " aria-hidden="true">&nbsp;</i>reply</a>
                  <span>
                    <i class="fa fa-calendar-o pull-right" aria-hidden="true">&nbsp; 1hour</i>
                  </span>
                </div>
              </div><!--end item -->
            </div>
          </div><!--end comment -->
        </div>
      </div><!-- tHONG TIN END BAI VIET-->
      <!-- BAI VIET LIEN QUAN -->
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 bai-viet">
            <div class="tai-lieu-noi-bat">
              <h3>Bài viết liên quan</h3>
            </div>
            <!-- item -->
            <?php foreach ($Cate_Book as $ebooks): ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="" >
                    <img src="<?= $ebooks->img ?>" style="border:1px solid #000">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href=""><?= $ebooks->title ?></a></h4>
                  <p><?= $ebooks->decription ?>
                    <a href="">Read More</a>
                  </p>
                </div>
              </div> <!-- end item -->
            <?php endforeach ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 bai-viet">
            <div class="tai-lieu-noi-bat">
              <h3>Bài viết moi </h3>
            </div>
            <?php foreach ($Cate_Book as $ebook): ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="" >
                    <img src="<?= $ebook->img ?>" style="border:1px solid #000">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href=""><?= $ebook->title ?></a></h4>
                  <p><?= $ebook->decription ?>
                    <a href="">Read More</a>
                  </p>

                </div>
              </div> <!-- end item -->
            <?php endforeach ?>
          </div>
        </div>
      </div><!--END BAI VIET LIEN QUAN -->
    </div>
  </section>
 
	<footer>
  <?php
    include_once'sub/footer.php'
   ?>
  </footer>
  <div id="go-to-top" class="glyphicon glyphicon-chevron-up" style="display: block;"></div>
  <script src="public/jQuery/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="public/js/owl.carousel.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/style.js"></script>
</body>
</html>