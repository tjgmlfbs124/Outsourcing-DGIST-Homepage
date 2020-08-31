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


  <!--== Start Blog Details Page Content ==-->
  <div class="blog-details-page-content sp-y"  style="margin-top:100px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-9">
                  <article class="blog-post-details">
                      <div class="blog-post-txt">
                        <div class="member-desc">
                          <h2 id="profile-name">ART Rab :: Notice</h2>
                          <h5 id="profile-position">Notice</h5>
                        </div>
                      </div>
                  </article>
                  <ul id="people-list" class="sidebar-list">
                  </ul>
                  <div class="col-lg-15">
                      <article id="input-form"class="blog-post-details">


                      </article>
                  </div>
              </div>

              <div class="col-lg-3">
                  <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                      <!-- Start Single Sidebar Wrap -->
                      <div class="single-sidebar-item-wrap">
                          <h3 class="sidebar-title">PEOPLE LIST</h3>
                          <div class="sidebar-body">
                              <ul class="sidebar-list">
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=professor">NOTICE</a></li>
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=researcher">UPDATE</a></li>
                                  <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=student">NEWS</a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Single Sidebar Wrap -->

                      <!-- Start Single Sidebar Wrap -->
                      <div class="single-sidebar-item-wrap">
                          <h3 class="sidebar-title">MENU</h3>
                          <div class="sidebar-body">
                              <div class="latest-blog-widget">

                                <div class="single-blog-item">
                                    <div class="post-thumb">
                                        <figure class="service-thumb" >
                                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/paper-04.jpg" alt="Businex-Service"/>
                                            <div class="service-content" style="left:0; background-color: rgba(64,64,64, 0.5);">
                                                <div class="service-content-inner" style="width:100%; height:100%;">

                                                </div>
                                            </div>
                                        </figure>
                                    </div>

                                    <div class="post-info">
                                        <h6><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=professor.php">PEOPLE</a></h6>
                                        <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                    </div>
                                </div>

                                  <div class="single-blog-item">
                                      <div class="post-thumb">
                                          <figure class="service-thumb" >
                                              <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/paper-01.jpg" alt="Businex-Service"/>
                                              <div class="service-content" style="left:0; background-color: rgba(64,64,64, 0.5);">
                                                  <div class="service-content-inner" style="width:100%; height:100%;">
                                                  </div>
                                              </div>
                                          </figure>
                                      </div>

                                      <div class="post-info">
                                          <h6><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/paper.php?cat=international_journal&page=1">RESEARCH</a></h6>
                                          <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Single Sidebar Wrap -->
                  </aside>
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
      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $category = $_GET['cat'];
        $url = "";?>

        $("#profile-position").text("<?php echo ucfirst($category)?>");
        <?php
        if(isset($_GET['id'])){
          switch($category){
            case "professor" :
              $url = "/pg/admin/people/professor_input_form.php?cat=".$category."&id=".$_GET['id'];
              break;
            default :
              $url = "/pg/admin/people/people_input_form.php?cat=".$category."&id=".$_GET['id'];
          }
          ?>
          $("#input-form").load("<?php echo $url ?>");

          <?php
        }
        else{
          $result = $api -> select_peoples($category);
          while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
            $("#people-list").append("<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=<?php echo $category?>&id=<?php echo $row['id']?>\"><?php echo $row['kr_name']?></a></li>");
          <?php }
        }

      ?>
    </script>
</body>
</html>
