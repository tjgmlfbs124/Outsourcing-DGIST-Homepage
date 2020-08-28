<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DGIST :: Radar Lab</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700" rel="stylesheet">

    <!--== All Magnific Popup CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/magnific-popup.min.css" rel="stylesheet" />
    <!--== All Animate CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/animate.min.css" rel="stylesheet" />
    <!--== All FontAwesome CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== All Material Icons CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/materialdesignicons.min.css" rel="stylesheet" />
    <!--== All Helper CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/helper.min.css" rel="stylesheet" />
    <!--== All Revolution CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/settings.css" rel="stylesheet" />
    <!--== All Slicknav CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/slicknav.min.css" rel="stylesheet" />
    <!--== All Timeline CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/timeline.css" rel="stylesheet" />
    <!--== All Slick Slider CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/slick.min.css" rel="stylesheet" />
    <!--== All BootStrap CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/style.min.css" rel="stylesheet" />

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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
                          <h2>LAB :: Notice</h2>
                          <p>Businex always try to provide the best Business Solutions for Clinets
                              to grow up their Business very sharply and smoothly.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
    <!--== End Page Header Area ==-->


  <!--== Start Blog Details Page Content ==-->
  <div class="blog-details-page-content sp-y"  style="margin-top:100px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <article class="blog-post-details">
                      <div class="blog-post-txt">
                        <div class="member-desc">
                          <h2 id="profile-name">Notice</h2>
                          <h5 id="profile-position">공지사항</h5>
                        </div>
                        <ul id="notice-list" style="margin-top:75px;">
                        </ul>
                        <div class="pagination-wrap">
                            <ul id="notice-list" class="pagination">
                                <li class="prev" onclick="movePage('prev')"><a style="visibility:hidden;"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                                <li class="next" onclick="movePage('next')"><a style="visibility:hidden;">Next <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                      </div>
                  </article>
              </div>
          </div>
      </div>
  </div>
  <!--== End Blog Details Page Content ==-->

  	<footer class="footer-area sp-y">
  			<?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
  	</footer>


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
    <!-- End Off Canvas Menu Wrapper -->


    <!--=======================Javascript============================-->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/popper.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/waypoint.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/counterup.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/instafeed.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/jquery.appear.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/jquery.slicknav.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/parallax.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/slick.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/plugins/magnific-popup.min.js"></script>

    <!--=== Active Js ===-->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/active.min.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/jquery.themepunch.tools.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/jquery.themepunch.revolution.min.js"></script>


    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/extensions/revolution.extension.video.min.js"></script>

    <!--=== REVOLUTION JS ===-->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/js/revslider/rev-active.js"></script>
    <script>
      function highlightPageIndex(){
        $("#pg-index-<?php echo $_GET['page']-1 ?>").css("color","#3c3c3c");
      }

      function sliceDate(date){
        return date.split(" ")[0];
      }
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $result = $api -> select_notices($_GET['page']);
        $pages = $api -> select_notices_count();

        while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
          $("#notice-list").append("<li id=\"list-<?php echo $row['id']?>\" style=\"border-bottom:1px solid #eee; padding:10px 0px 10px 0px; cursor:pointer;\" onclick=\"location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/noticeInfo.php?no=<?php echo $row['id']?>'\"></li>")
          $("#list-<?php echo $row['id']?>").append('<p><?php echo $row['title']?><a style=\"float:right;\">' +  sliceDate("<?php echo $row['date'] ?>") + '</a></p>');
        <?php }

        for($idx=0; $idx<=$pages['CNT'] / 10; $idx++){ ?>
          $("#notice-list > .next").before("<li><a id=\"pg-index-<?php echo $idx?>\" href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/noticeList.php?page=<?php echo $idx+1?>\" style=\"color:#a0a0a0\"><?php echo $idx+1?></a></li>");
          <?php
        }

      ?>
      highlightPageIndex();

    </script>
</body>
</html>
