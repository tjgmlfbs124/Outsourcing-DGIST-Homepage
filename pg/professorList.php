<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DGIST :: Radar Lab</title>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_css.php'?>

</head>

<body>
	<header class="header-area">
  		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php'?>
	</header>

  <!--== Start Page Header Area ==-->
  <div class="page-header-area">
    <div class="page-header-area bg-img" data-bg="<?php $_SERVER['DOCUMENT_ROOT']?>/image/main01.jpg" style="position:absolute;"></div>
    <div class="page-header-area bg-img" style="position:absolute; background:#080b1a; opacity: 0.7;">
      <div class="container" style="max-width:1900px;">
          <div class="row">
              <div class="col-lg-10 col-xl-8 m-auto text-center">
                  <div class="page-header-content-inner">
                      <div class="page-header-content">
                          <h2>DGIST ART LAB<br></h2>
                          <p style="max-width:100%;">Home / Professor</p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
  </div>
    <!--== End Page Header Area ==-->


    <!--== Start Blog Details Page Content ==-->
    <div class="blog-details-page-content sp-y">
        <div class="container">
            <div class="row">
                <div class="col-lg-15" style="width:100%;">
                    <article class="blog-post-details">

                        <!-- Start Comment Area Wrapper -->
                        <div class="comment-area-wrapper">
                            <div id="professor-list" class="comments-view-area">

                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
    <!--== End Blog Details Page Content ==-->

    <footer class="footer-area sp-y" style="margin-top: 50px; padding:30px 0px 10px 0px;">
  			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
  	</footer>


    <!-- Scroll Top Button -->
    <button class="btn-scroll-top"><i class="mdi mdi-chevron-up"></i></button>


    <!-- Start Off Canvas Menu Wrapper -->
    <aside class="off-canvas-wrapper off-canvas-cog">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner">
            <div class="close-btn">
                <button class="btn-close"><i class="mdi mdi-close"></i></button>
            </div>

            <!-- Start Off Canvas Content -->
            <div class="off-canvas-content mb-sm-30">
                <div class="off-canvas-item">
                    <div class="log-in-content-wrap">
                        <h2>Login</h2>
                        <div class="login-form mtn-15" >
                            <form action="#" method="post">
                                <div class="form-input-item">
                                    <label for="username" class="sr-only">Username</label>
                                    <input type="text" id="username" placeholder="Username" required>
                                </div>

                                <div class="form-input-item">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" id="password" placeholder="Password" required>
                                </div>

                                <div class="form-input-item">
                                    <button type="submit" class="btn-submit">Login</button>
                                </div>
                            </form>
                        </div>

                        <div class="sign-up-notification">
                            <p>Not Resisted? <a href="#">Create Account Now.</a></p>
                        </div>
                    </div>
                </div>

                <div class="off-canvas-item mt-sm-30">
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://dribbble.com" target="_blank"><i class="fa fa-dribbble"></i></a>
                        <a href="https://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <div class="copyright-content">
                        <p> © Businex 2019. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- End Off Canvas Menu Wrapper -->







    <!-- Start Off Canvas Menu Wrapper -->
    <aside class="off-canvas-wrapper off-canvas-menu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner">
            <!-- Start Off Canvas Header -->
            <div class="close-btn">
                <button class="btn-close"><i class="mdi mdi-close"></i></button>
            </div>

            <!-- Start Off Canvas Content -->
            <div class="off-canvas-content">
                <div class="res-mobile-menu">

                </div>
            </div>
        </div>
    </aside>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>

</body>

<script>
  // 클립보드에 글자를 복사한다.
  function is_ie() {
    if(navigator.userAgent.toLowerCase().indexOf("chrome") != -1) return false;
    if(navigator.userAgent.toLowerCase().indexOf("msie") != -1) return true;
    if(navigator.userAgent.toLowerCase().indexOf("windows nt") != -1) return true;
    return false;
  }

  function copy_to_clipboard(str) {
    event.stopPropagation(); // 부모 온클릭 이벤트 삭제
    if( is_ie() ) {
      window.clipboardData.setData("Text", str);
      alert("복사되었습니다.");
      return;
    }
    prompt("Ctrl+C를 눌러 복사하세요.", str);
  }

  <?php
		require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
		$api = new getForm();
    $result = $api -> select_peoples($_GET['cat']);
			while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        $("#professor-list").append("<div class=\"single-comment-wrap d-flex\" id=\"list-" + <?php echo $row['id']?> + "\" onclick=\"location.href='/pg/professorInfo.php?cat=professor&id=<?php echo $row['id']?>'\"></div>");
        $("#list-<?php echo $row['id']?>").append("<figure class=\"author-thumb\"></figure>");
        $("#list-<?php echo $row['id']?> > .author-thumb").append("<a href=\"/pg/professorInfo.php?cat=professor&id=<?php echo $row['id']?>\"><img src=\"<?php $_SERVER['DOCUMENT_ROOT']?>/image/profile/<?php echo $row['image']?>.jpg\" alt=\"Author\"></a>");
        $("#list-<?php echo $row['id']?>").append("<div class=\"comments-info\"></div>");
        $("#list-<?php echo $row['id']?> > .comments-info").append(
          "<p class=\"m-0\" \">" +
          "<div class=\"member-desc\"><h2 style=\"font-size:20px;\"><?php echo $row['en_name'] ?> &nbsp <a>Ph.D</a></h2><h5><?php echo $row['kr_name'] ?></h5></div>" +
          "Position : <?php echo $row['position'] ?> <br>" +
          "Address : <?php echo $row['address'] ?> <br>" +
          "Phone : <?php echo $row['phone'] ?> <br>" +
          "Fax : <?php echo $row['fax'] ?> <br>" +
          "<p onclick=copy_to_clipboard(\"<?php echo $row['email'] ?>\")>Email : <span  style=\"color:#007bff; cursor:pointer;text-decoration:underline;\"><?php echo $row['email'] ?></span></p><br>" +
        "</p>"
      );
      <?php }
   ?>
</script>

</html>
