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
                                    <h2 id="profile-name"></h2>
                                    <h5 id="profile-position"></h5>
                                    <p id="profile-info"></p>

                                    <div class="contact-info mt-25">
                                        <p id="profile-address"><strong></strong> <br></p>
                                        <p id="profile-phone"><strong>Phone</strong></p>
                                        <p id="profile-fax"><strong>Fax</strong></p>
                                        <p id="profile-email"><strong>Email</strong></p>
                                        <p><strong>이력서</strong><a id="profile-cv" style="color:#007bff; cursor:pointer;text-decoration:underline;">다운로드</a></p>
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

    function addBiography(title, date, location, honor){
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
              "<p class=\"cd-description\">" + honor + "</p>"+
          "</div>"+
      "</div>";
    }

    <?php
      require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
      $api = new getForm();
      $result = $api -> select_people($_GET['cat'],$_GET['id']);
      $biography = $api -> select_history($_GET['id']);
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        $("#profile-img").attr("src","<?php $_SERVER['DOCUMENT_ROOT']?>/image/profile/<?php echo $row['image']?>.jpg");
        $("#profile-name").html("<?php echo $row['en_name']?> &nbsp Ph.D");
        $("#profile-position").text("Prof. <?php echo $row['kr_name']?>교수");
        $("#profile-address").html("<strong>Address</strong><?php echo $row['address']?>");
        $("#profile-phone").html("<strong>Phone</strong><?php echo $row['phone']?>");
        $("#profile-fax").html("<strong>Fax</strong><?php echo $row['fax']?>");
        $("#profile-email").html("<strong>Email</strong><span onclick=copy_to_clipboard(\"<?php echo $row['email'] ?>\") style=\"color:#007bff; cursor:pointer;text-decoration:underline;\"><?php echo $row['email']?></span>");
        $("#profile-info").html("<?php echo $row['cv']?>")
        $("#profile-cv").attr("href","<?php $_SERVER['DOCUMENT_ROOT']?>/cvFile/<?php echo $row['cv_file']?>");
      <?php }

      while ($row = $biography->fetch(PDO::FETCH_BOTH)){?>
        console.log("<?php echo $row['honorsTitle']?>");
        $("#biography-line").append(
          addBiography(
            "<?php echo $row['title']?>",
            "<?php echo $row['year']?>",
            "<?php echo $row['location']?>",
            "<?php echo $row['honorsTitle']?>")
          );
      <?php }
     ?>
    </script>
</body>

</html>
