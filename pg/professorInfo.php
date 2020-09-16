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
      <div class="container" >
          <div class="row">
              <div class="col-lg-10 col-xl-8 m-auto text-center">
                  <div class="page-header-content-inner">
                      <div class="page-header-content">
                          <h2>DGIST ART LAB<br></h2>
                          <p style="max-width:100%;">Home / Professor / Professor Detail</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
    <!--== End Page Header Area ==-->

    <!--== Start Page Content Area Wrapper ==-->
    <div class="page-content-wrapper">
        <div class="member-details-wrapper sm-top">
            <div class="container">
                <div class="member-details-wrap">
                    <div class="member-details-top">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="member-pic mb-sm-35">
                                    <img id="profile-img" src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/team/team-details.jpg" alt="Businex-Team"/>
                                </div>
                            </div>

                            <div class="col-md-8 ml-auto">
                                <div class="member-desc">
                                    <h2 id="profile-name">Hong Gil Dong</h2>
                                    <h5 id="profile-position">Professor/Convergence Engineering</h5>
                                    <p id="profile-info">abcdefghijklmnopqrxtuvwxyzabcdefghijklmnopqrxtuvwxyzabcdefghi</p>

                                    <div class="contact-info mt-25">
                                        <p id="profile-address"><strong>Address</strong> DGIST (Daegu Gyeongbuk Institute of Science & Technology), 50-1,<br>
                                           Sang-Ri, Hyeongpung-Myeon, Dalseong-Gun, Daegu, 711-873, Korea</p>
                                        <p id="profile-phone"><strong>Phone</strong> 82-53-785-4580</p>
                                        <p id="profile-fax"><strong>Fax</strong> 82-53-785-4589</p>
                                        <p id="profile-email"><strong>Email</strong> jhlee@dgist.ac.kr</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="member-details-bottom sm-top-wt" style="margin-top:50px;">
                        <div class="row mtn-50">
                            <div class="col-xl-6 m-auto text-center">
                                <div class="member-education mem-achieve-item">
                                    <h4>History</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="cd-timeline-wrap">
                                    <div id="biography-line" class="cd-timeline">
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Content Area Wrapper ==-->

    <footer class="footer-area sp-y" style="margin-top: 30px;width:100%; height:63px; padding-top:30px;">
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
                        <div class="login-form mtn-15">
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


    <script>
    // 클립보드에 글자를 복사한다.
    function is_ie() {
      if(navigator.userAgent.toLowerCase().indexOf("chrome") != -1) return false;
      if(navigator.userAgent.toLowerCase().indexOf("msie") != -1) return true;
      if(navigator.userAgent.toLowerCase().indexOf("windows nt") != -1) return true;
      return false;
    }

    function copy_to_clipboard(str) {
      if( is_ie() ) {
        window.clipboardData.setData("Text", str);
        alert("복사되었습니다.");
        return;
      }
      prompt("Ctrl+C를 눌러 복사하세요.", str);
    }

    function addBiography(title, date, location){
      return ""+
      "<div class=\"cd-timeline-block\">"+
          "<div class=\"cd-timeline-img\">"+
              "<span class=\"dot\"></span>"+
          "</div>"+
          "<div class=\"cd-timeline-content\">"+
              "<div class=\"cd-heading\">"+
                  "<h2>"+title+"</h2>"+
                  "<p>"+date+" | <span>"+location+"</span></p>"+
              "</div>"+
          "</div>"+
      "</div>";
    }

    <?php
      require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
      $api = new getForm();
      $result = $api -> select_people($_GET['cat'],$_GET['id']);
      $biography = $api -> select_biography($_GET['id']);
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        $("#profile-img").attr("src","<?php $_SERVER['DOCUMENT_ROOT']?>/image/profile/<?php echo $row['image']?>.jpg");
        $("#profile-name").html("<?php echo $row['en_name']?> &nbsp Ph.D");
        $("#profile-position").text("<?php echo $row['kr_name']?>, <?php echo $row['position']?>");
        $("#profile-address").html("<strong>Address</strong><?php echo $row['address']?>");
        $("#profile-phone").html("<strong>Phone</strong><?php echo $row['phone']?>");
        $("#profile-fax").html("<strong>Fax</strong><?php echo $row['fax']?>");
        $("#profile-email").html("<strong>Email</strong><span onclick=copy_to_clipboard(\"<?php echo $row['email'] ?>\") style=\"color:#007bff; cursor:pointer;text-decoration:underline;\"><?php echo $row['email']?></span>");
        $("#profile-info").html("<?php echo $row['awards_and_honors']?>")
      <?php }

      while ($row = $biography->fetch(PDO::FETCH_BOTH)){?>
        $("#biography-line").append(
          addBiography(
            "<?php echo $row['title']?>",
            "<?php echo $row['year']?>",
            "<?php echo $row['location']?>")
          );
      <?php }
     ?>
    </script>
</body>

</html>
