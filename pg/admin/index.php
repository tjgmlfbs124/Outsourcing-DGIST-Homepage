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

  <!--== Start Service Area Wrapper ==-->
  <div class="service-area-wrapper sm-top-wt">
      <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="assets/img/service/service-bg.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-xl-5 m-auto text-center">
                      <div class="section-title section-title--light">
                          <h6>데이터 관리자모드</h6>
                          <h2 class="mb-0">미래자동차 연구부</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="service-content-area">
          <div class="container">
              <div class="row mtn-30">
                  <div class="col-sm-6 col-lg-4">
                      <!-- Start Service Item -->
                      <div class="service-item">
                        <figure class="service-thumb" >
                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/service/02.jpg" alt="Businex-Service"/>
                            <div class="service-content" style="left:0; background-color: rgba(26,58,137, 1);">
                                <div class="service-content-inner" >
                                    <h2><strong style="color:#fff;">People </strong></h2>
                                </div>
                            </div>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/people/index.php?cat=professor" class="stretched-link">Category List</a></h5>
                                <p>- Professor</p>
                                <p>- Researcher</p>
                                <p>- Student</p>
                                <p>- Alumi</p>
                            </div>
                        </div>
                      </div>
                      <!-- End Service Item -->
                  </div>

                  <div class="col-sm-6 col-lg-4">
                      <!-- Start Service Item -->
                      <div class="service-item">
                        <figure class="service-thumb" >
                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/service/02.jpg" alt="Businex-Service"/>
                            <div class="service-content" style="left:0; background-color: rgba(26,58,137, 1);">
                                <div class="service-content-inner" >
                                    <h2><strong style="color:#fff;">Research </strong></h2>
                                </div>
                            </div>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="service-details.html" class="stretched-link">Category List</a></h5>
                                <p>- Paper</p>
                                <p>- Patent</p>
                                <p>- Technology Trasnper</p>
                                <p>- Project</p>
                                <p>- Interest</p>
                            </div>
                        </div>
                      </div>
                      <!-- End Service Item -->
                  </div>

                  <div class="col-sm-6 col-lg-4">
                      <!-- Start Service Item -->
                      <div class="service-item">
                        <figure class="service-thumb" >
                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/img/service/02.jpg" alt="Businex-Service"/>
                            <div class="service-content" style="left:0; background-color: rgba(26,58,137, 1);">
                                <div class="service-content-inner" >
                                    <h2><strong style="color:#fff;">Notice </strong></h2>
                                </div>
                            </div>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="service-details.html" class="stretched-link">Category List</a></h5>
                                <p>- Notice</p>
                                <p>- News</p>
                                <p>- Update</p>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

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

</body>

</html>
